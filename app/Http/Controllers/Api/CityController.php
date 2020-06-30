<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;

/**
 * @group Cities
 * 
 * Cities API
 */
class CityController extends Controller
{
  /**
   * Display all cities
   * 
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return City::all();
  }
}