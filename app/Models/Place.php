<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Place extends Model
{
    protected $fillable = [
        'uuid','categories_id', 'user_id', 'name', 'description', 'latitude', 'longitude', 'parking', 'wc', 'restaurants', 'cities_id'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function cities()
    {
        return $this->belongsTo(City::class);
    }

    public function images()
    {
        return $this->hasMany(Images::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function scopeWC($query,$wc) {
        if(!Empty($wc)){
            return $query->where('wc',$wc);
        }
        return $query;
    }
    public function scopeRestaurants($query,$restaurants) {
        if(!Empty($restaurants)){
            return $query->where('restaurants',$restaurants);
        }
        return $query;
    }
    public function scopeParking($query,$parking) {
        if(!Empty($parking)){
            return $query->where('parking',$parking);
        }
        return $query;
    }
    public function scopeCategory($query,$category) {
        if(!Empty($category)){
            return $query->where('categories_id',$category);
        }
        return $query;
    }
    public function scopeCity($query,$city) {
        if(!Empty($city)){
            return $query->where('cities_id',$city);
        }
        return $query;
    }
}
