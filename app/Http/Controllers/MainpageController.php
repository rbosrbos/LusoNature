<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\template;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;

class MainpageController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $beaches = Category::where('name','Beaches')->first()->id;
        $forests = Category::where('name','Forests')->first()->id;
        $camping = Category::where('name','Camping')->first()->id;
        $fun = Category::where('name','Fun')->first()->id;
        $latest = Place::with('images')->orderBy('created_at','desc')->take(3)->get();
        return view('welcome',[
            'latest' => $latest,
            'beaches' => $beaches,
            'forests' => $forests,
            'camping' => $camping,
            'fun' => $fun
        ]);
    }
}
