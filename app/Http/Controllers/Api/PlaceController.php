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
     */
    public function index(Request $request)
    {
        if ($request->city) {
            if ($request->category) {
                return Place::where([
                    'categories_id' => $request->category,
                    'cities_id' => $request->city,
                    ])->get();
            }
            return Place::where('cities_id', $request->city)->get();
        }
        if ($request->category) {
            return Place::where('categories_id',$request->category)->get();
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
