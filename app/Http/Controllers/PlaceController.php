<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Comment;
use App\Models\Images;
use App\Models\Place;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use stdClass;

class PlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified')->except('index', 'show', 'main', 'adminEdit', 'destroy', 'adminAprove', 'edit');
        $this->middleware('auth:admin')->only('adminEdit', 'destroy', 'adminAprove');
    }
    /**
     * Validates the request. Type 1 for update (new pictures can be null)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param integer $type
     */
    private function validatePlace(Request $request, $type = null)
    {
        $rules = [
            'name' => 'required|min:10',
            'description' => 'required|min:30',
            'city' => 'required',
            'category' => 'required'
        ];
        $messages = [];
        if (empty($type)) {
            $rules = array_merge($rules, ['pictures' => 'required|min:1|max:10'], ['pictures.*' => 'image|dimensions:min_width=200,min_height=200']);
            $messages = [
                'pictures' => 'required|min:1|max:10',
                'pictures.*' => 'image|dimensions:min_width=1920,min_height=1080'
            ];
        }
        $request->validate($rules, $messages);

        $isValidCategory = Category::where('id', $request->category)->first();
        $isValidCity = City::where('id', $request->city)->first();
        if (!empty($isValidCity) && !empty($isValidCategory)) {
            return true;
        }
        return false;
    }
    /**
     * 
     * Public page for places
     * 
     * @param Array $filters
     */
    public function index(Request $request)
    {
        $places = Place::where('status', 1)
            ->with(['categories', 'cities', 'images'])
            ->whereHas('images', function ($query) {
                return $query->where('status', '=', 1);
            })
            ->wc($request->wc)
            ->restaurants($request->restaurants)
            ->parking($request->parking)
            ->category($request->category)
            ->city($request->city)
            ->paginate(12)
            ->appends(request()->query());
        return view('place.index', [
            'places' => $places,
            'categories' => Category::orderBy('name', 'asc')->get(),
            'cities' => City::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $place = new Place();
        $cities = City::orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name', 'asc')->get();
        return view('place.create-edit', [
            'cities' => $cities,
            'categories' => $categories,
            'place' => $place
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->validatePlace($request)) {
            $data = $request->only('name', 'description', 'latitude', 'longitude', 'parking', 'wc', 'restaurants');
            $data['id'] = Str::uuid();
            $data['user_id'] = Auth::user()->id;
            $data['categories_id'] = $request->category;
            $data['cities_id'] = $request->city;

            Place::create($data);
            $id = $data['id'];
            $files = $request->pictures;
            mkdir('storage/places/' . $id . '/', 666, true);
            for ($i = 0; $i < count($files); $i++) {
                $imageID = Str::uuid();
                Image::make($request->file('pictures')[$i]->getRealPath())->resize(1920, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->orientate()->save('storage/places/' . $id . '/' . $imageID . '.jpg');
                Image::make($request->file('pictures')[$i]->getRealPath())->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->orientate()->save('storage/places/' . $id . '/' . $imageID . '-small.jpg');
                $dataImage = array(
                    'id' => $imageID,
                    'place_id' => $data['id'],
                    'user_id' => $data['user_id']
                );
                Images::create($dataImage);
            }
            return back()->with(['status' => 'success']);
        } else {
            return back()->with(['status' => 'error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(string $placeuuid)
    {
        $place = Place::where('uuid', $placeuuid)->first();
        $ratings = Rating::where([
            'user_id' => Auth::id(),
            'place_id' => $place->id
        ])->first();
        $votes = Rating::where('place_id', $place->id)->get();
        $comments = Comment::where([
            'place_id' => $place->id,
            'status' => 1
        ])->orderBy('id', 'desc')->with('user')->get();
        $average = [];
        if (count($votes) > 0) {
            $average['access'] = $votes->sum('access') / count($votes);
            $average['location'] = $votes->sum('location') / count($votes);
            $average['giftshops'] = $votes->sum('giftshops') / count($votes);
            $average['restaurants'] = $votes->sum('restaurants') / count($votes);
        }
        $colors = [
            'blue', 'orange', 'red', 'green'
        ];
        return view('place.show', [
            'place' => $place,
            'images' => $place->images()->get(),
            'ratings' => $ratings,
            'average' => $average,
            'votes' => count($votes),
            'comments' => $comments,
            'colors' => $colors
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(string $placeuuid)
    {
        $place = Place::where('uuid', $placeuuid)->first();
        if (Auth::guard('web')->check()) {
            if ($place->user_id != Auth::user()->id && !Auth::guard('admin')->check()) {
                abort(403, 'Can\'t touch this');
            }
        } else {
            if (!Auth::guard('admin')->check()) {
                abort(403, 'Can\'t touch this');
            }
        }

        $place->load('images');
        $cities = City::orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name', 'asc')->get();
        return view('place.create-edit', [
            'place' => $place,
            'cities' => $cities,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        if ($place->user_id != Auth::user()->id) {
            abort(403, 'Can\'t touch this');
        } else {
            if ($this->validatePlace($request, 1)) {
                $data = $request->only('name', 'description', 'latitude', 'longitude', 'parking', 'wc', 'restaurants');
                $data['categories_id'] = $request->category;
                $data['cities_id'] = $request->city;
                $data['status'] = NULL;
                Place::where('id', $place->id)->update($data);
                $id = $place->id;
                foreach ($place->images as $img) {
                    if (!in_array($img, json_decode($request->images))) {
                        Images::destroy($img->id);
                        Storage::delete('places/' . $place->id . '/' . $img->id . '.jpg');
                        Storage::delete('places/' . $place->id . '/' . $img->id . '-small.jpg');
                    }
                }
                $files = $request->pictures;
                if ($files) {
                    if (!file_exists('storage/places/' . $id . '/')) {
                        mkdir('storage/places/' . $id . '/', 666, true);
                    }
                    for ($i = 0; $i < count($files); $i++) {
                        $imageID = Str::uuid();
                        Image::make($request->file('pictures')[$i]->getRealPath())->resize(1920, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->orientate()->save('storage/places/' . $id . '/' . $imageID . '.jpg');
                        Image::make($request->file('pictures')[$i]->getRealPath())->resize(500, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->orientate()->save('storage/places/' . $id . '/' . $imageID . '-small.jpg');
                        $dataImage = array(
                            'id' => $imageID,
                            'place_id' => $place->id,
                            'user_id' => Auth::user()->id
                        );
                        Images::create($dataImage);
                    }
                }

                return back()->with(['status' => 'success']);
            } else {
                return back()->with(['status' => 'error']);
            }
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $uuid = Place::where('id', $id)->first()->uuid;
        Place::destroy($id);
        Storage::deleteDirectory('places/' . $uuid);
        return 'Place ' . $id . ' deleted!';
    }

    /**
     * Show the places administration dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminEdit(int $status)
    {
        $places = Place::with('user')->where('status', $status)->orderBy('id', 'asc')->get();
        return view('admin.places.index', [
            'places' => $places,
            'status' => $status
        ]);
    }

    /**
     * Aprove place submission
     * 
     * @param int $id
     * @return string
     */
    public function adminAprove(int $id)
    {
        Place::where('id', $id)->update([
            'status' => 1
        ]);
        return 'Place `' . $id . '` aproved';
    }
}
