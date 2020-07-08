<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\News;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function index(Request $request) {
        $request->validate([
            'search' => 'required|min:3'
        ]);
        $search = '%'.htmlspecialchars_decode($request->search).'%';
        $places = Place::where('name','like',$search)
                                    ->orWhere('description','like',$search)
                                    ->orWhere('name','like',$search)->get();
        $news = News::where('title','like',$search)
                                    ->orWhere('body','like',$search)
                                    ->orWhere('summary','like',$search)->get();
        $comments = Comment::where('comment','like',$search)->get();

        $collected = collect($news->union($places)->union($comments));
        $search = $request->search;
        return view('search.index',[
            'results' => $collected->paginate(10)->appends($search),
            'search' => htmlspecialchars($request->search)
        ]);
    }
}
