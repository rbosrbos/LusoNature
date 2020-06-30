<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;

/**
 * @group Categories
 * 
 * Categories API
 */
class CategoryController extends Controller
{
  /**
   * Display all categories
   * 
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return Category::all();
  }
}