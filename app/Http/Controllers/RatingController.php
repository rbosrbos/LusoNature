<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class RatingController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function storeOrUpdate(Request $request)
    {
        $rating = Rating::where([
            'place_id' => $request->place_id,
            'user_id' => Auth::id()
        ])->first();
        if ($rating === null) {
            $rating = new Rating;

            //$rating->id = Uuid::uuid4();
            $rating->place_id = $request->place_id;
            $rating->user_id = Auth::id();
            $rating->access = $request->access;
            $rating->giftshops = $request->giftshops;
            $rating->location = $request->location;
            $rating->restaurants = $request->restaurants;

            return $rating->save();
        } else {
            return Rating::where([
                'place_id' => $request->place_id,
                'user_id' => Auth::id(),
            ])->update([
                'access' => $request->access,
                'giftshops' => $request->giftshops,
                'location' => $request->location,
                'restaurants' => $request->restaurants
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
