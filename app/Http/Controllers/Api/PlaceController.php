<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * @group Places
 * 
 * Places API
 */
class PlaceController extends Controller
{
    /**
     * Display a list of all places
     *
     * @return \Illuminate\Http\Response
     * @queryParam category_id int Category ID. Example: 2
     * @queryParam city_id boolean City ID. Example: 180
     */
    public function index(Request $request)
    {
        if ($request->city_id) {
            if ($request->category_id) {
                
                return Place::where([
                    'categories_id' => $request->category_id,
                    'cities_id' => $request->city_id,
                    ])->get();
            }
            return Place::where('cities_id', $request->city_id)->get();
        }
        if ($request->category_id) {
            return Place::where('categories_id',$request->category_id)->get();
        }
        return Place::all();
    }

    /**
     * Display the specified place.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @urlParam  id required The ID of the place.
     */
    public function show($id)
    {
        return Place::findOrFail($id);
    }
}
