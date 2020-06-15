<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Place extends Model
{
    protected $keyType = 'string';
    protected $fillable = [
        'id', 'categories_id', 'user_id', 'name', 'description', 'latitude', 'longitude', 'parking', 'wc', 'restaurants', 'cities_id'
    ];
    public $timestamps = false;
    public $incrementing = false;
    public function categories() {
        return $this->belongsTo(Category::class);
    }
    public function cities() {
        return $this->belongsTo(City::class);
    }
}
