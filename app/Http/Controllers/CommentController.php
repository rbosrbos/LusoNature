<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->only(['index', 'update', 'destroy']);
    }
    /**
     * Display comments
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexFiltered(string $status)
    {

        if ($status == "pending") {
            $method = 0;
        } else {
            $method = 1;
        }
        $comments = Comment::with(['user', 'place'])->where('status', $method)->orderBy('id', 'desc')->get();
        return view('admin.comments.index', [
            'comments' => $comments
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
        $place = Place::where('uuid', $request->place_id)->first();
        Comment::create([
            'user_id' => Auth::id(),
            'place_id' => $place->id,
            'comment' => $request->comment,
            'status' => 0
        ]);
        return response('Thank you for your comment. It will soon be reviewed and available.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $colors = [
            'blue', 'orange', 'red', 'green'
        ];
        $comment = Comment::find($id);
        return view('admin.comments.edit', [
            'comment' => $comment,
            'colors' => $colors
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $comment = Comment::find($id);
        if ($request->type === "1") {
            $comment->update(['status' => 1]);
            return 'Comment ' . $id . ' aproved!';
        } else {
            $comment->update([
                'comment' => $request->comment,
                'status' => 1
            ]);
            return back()->with([
                'message' => 'Comment ' . $id . ' updated!'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
