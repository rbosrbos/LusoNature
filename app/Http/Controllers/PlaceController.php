<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use stdClass;

class PlaceController extends Controller
{
    public function main()
    {
        $places = Place::with(['categories','cities'])->paginate();
        // $dumpHeaders = [];
        // foreach($headers as $header) {
        //     array_push($dumpHeaders,array(
        //         'text' => ucfirst($header),
        //         'value' => $header
        //         ));
        // }
        return view('place.index-main', [
            'places' => $places
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::where('user_id', Auth::user()->id)->get();
        return view('place.index', [
            'places' => $places
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name', 'asc')->get();
        return view('place.create', [
            'cities' => $cities,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:10',
            'description' => 'required|min:30',
            'city' => 'required',
            'category' => 'required',
            'pictures' => 'required|min:1|max:10',
            'pictures.*' => 'image|dimensions:min_width=200,min_height=200'
        ], [
            'pictures.*.dimensions' => 'Some of your images doesn\'t match minimum size',
            'pictures.*.image' => 'Some of your files are not images',
        ]);
        $data = $request->only('name', 'description', 'latitude', 'longitude', 'parking', 'wc', 'restaurants');
        $data['id'] = Str::uuid();
        $data['user_id'] = Auth::user()->id;
        $data['cities_id'] = $request->city;
        Place::create($data);
        $id = $data['id'];
        $files = $request->pictures;
        mkdir('storage/place/' . $id . '/', 666, true);
        for ($i = 0; $i < count($files); $i++) {
            Image::make($request->file('pictures')[$i]->getRealPath())->resize(1920, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('storage/place/' . $id . '/' . ($i + 1) . '.jpg');
        }

        return back()->with(['status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
