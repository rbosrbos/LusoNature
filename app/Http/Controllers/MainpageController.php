<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\template;

class MainpageController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

    }

    public function index()
    {
        return view('welcome');
    }
}
