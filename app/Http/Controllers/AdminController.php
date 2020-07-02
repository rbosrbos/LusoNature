<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the administration dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the news administration dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function news()
    {
        $news = News::with('user')->orderBy('id','desc')->get();
        return view('admin.news.index', [
            'news' => $news
        ]);
    }
}
