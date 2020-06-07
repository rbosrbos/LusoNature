<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\template;

class TemplateController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('welcome',['user' => $user]);
    }
}
