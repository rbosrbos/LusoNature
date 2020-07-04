<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except('index', 'show');
    }
    /**
     * Display all news
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::with('admin')->orderBy('id', 'desc')->paginate(10);
        return view('news.index', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:20',
            'summary' => 'required|min:50',
            'body' => 'required|min:200',
            'picture' => 'required|image'
        ]);
        News::create([
            'admin_id' => Auth::guard('admin')->id(),
            'title' => $request->title,
            'summary' => $request->summary,
            'body' => $request->body,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(string $newsuuid)
    {
        $news = News::where('uuid', $newsuuid)->first();

        $news->load('admin');
        return view('news.show', [
            'new' => $news->load('admin'),
            'route' => Route::currentRouteName()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(string $newuuid)
    {
        $new = News::where('uuid', $newuuid)->first();
        return view('admin.news.edit', ['new' => $new]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $new = News::find($id);
        if (!empty($request->picture)) {
            $request->validate([
                'picture' => 'required|image'
            ]);

            $files = Storage::allFiles('news/' . $new->uuid);
            Storage::delete($files);
            Image::make($request->file('picture')->getRealPath())->fit(665, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->orientate()->save('storage/news/' . $new->uuid . '/' . $new->uuid . '-card.jpg');
            Image::make($request->file('picture')->getRealPath())->fit(1920, 866, function ($constraint) {
                $constraint->aspectRatio();
            })->orientate()->save('storage/news/' . $new->uuid . '/' . $new->uuid . '.jpg');
        } else {
            $request->validate([
                'title' => 'required|min:20',
                'summary' => 'required|min:50',
                'body' => 'required|min:200'
            ]);
            $new->title = $request->title;
            $new->summary = $request->summary;
            $new->body = $request->body;
            $new->save();
            return back()->with(['message' => 'Data saved']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $new)
    {
        $uuid = News::where('id', $new)->first()->uuid;
        News::destroy($new);
        Storage::deleteDirectory('news/' . $uuid);
        return 'New ' . $new . ' deleted!';
    }

    /**
     * Show the news administration dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminEdit()
    {
        $news = News::with('admin')->orderBy('id', 'desc')->get();
        return view('admin.news.index', [
            'news' => $news
        ]);
    }
}
