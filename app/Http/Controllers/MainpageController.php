<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\template;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Place;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainpageController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $beaches = Category::where('name', 'Beaches')->first()->id;
        $forests = Category::where('name', 'Forests')->first()->id;
        $camping = Category::where('name', 'Camping')->first()->id;
        $fun = Category::where('name', 'Fun')->first()->id;
        $latest = Place::with('images')->orderBy('created_at', 'desc')->take(3)->get();
        $top = Rating::selectRaw('SUM(access+giftshops+location+restaurants) as total, place_id')
            ->with('place')
            ->groupBy('place_id')
            ->limit(3)
            ->orderBy('total', 'desc')
            ->get();
        $comments = Comment::with(['place','user'])->orderBy('created_at', 'desc')->limit(4)->get();
        return view('welcome', [
            'latest' => $latest,
            'beaches' => $beaches,
            'forests' => $forests,
            'camping' => $camping,
            'fun' => $fun,
            'top' => $top,
            'comments' => $comments
        ]);
    }
}
