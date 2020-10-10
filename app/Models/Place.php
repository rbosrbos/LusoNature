<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid', 'categories_id', 'user_id', 'name', 'description', 'latitude', 'longitude', 'parking', 'wc', 'restaurants', 'cities_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }


    public function scopeWC($query, $wc)
    {
        if (!empty($wc)) {
            return $query->where('wc', $wc);
        }
        return $query;
    }
    public function scopeRestaurants($query, $restaurants)
    {
        if (!empty($restaurants)) {
            return $query->where('restaurants', $restaurants);
        }
        return $query;
    }
    public function scopeParking($query, $parking)
    {
        if (!empty($parking)) {
            return $query->where('parking', $parking);
        }
        return $query;
    }
    public function scopeCategory($query, $category)
    {
        if (!empty($category)) {
            return $query->where('categories_id', $category);
        }
        return $query;
    }
    public function scopeCity($query, $city)
    {
        if (!empty($city)) {
            return $query->where('cities_id', $city);
        }
        return $query;
    }
}
