<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\template;
use App\Models\User;

class MainpageController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

    }

    public function index()
    {
        $user = auth()->user();
        return view('welcome', ['user' => $user]);
    }
}
