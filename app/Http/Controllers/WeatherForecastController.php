<?php

namespace App\Http\Controllers;

use App\WeatherForecast;
use GuzzleHttp\Client;

use function GuzzleHttp\json_encode;

class WeatherForecastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forecast.index');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WeatherForecast  $weatherForecast
     * @return \Illuminate\Http\Response
     */
    public function show(WeatherForecast $weatherForecast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WeatherForecast  $weatherForecast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeatherForecast $weatherForecast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WeatherForecast  $weatherForecast
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeatherForecast $weatherForecast)
    {
        //
    }
}
