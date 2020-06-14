<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\template;
use App\Models\Admin;
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
        return view('welcome');
    }
}
