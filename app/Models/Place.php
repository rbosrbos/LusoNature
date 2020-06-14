<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Place extends Model
{
    protected $fillable = [
        'id', 'user_id', 'name', 'description', 'latitude', 'longitude', 'parking', 'wc', 'restaurants'
    ];
    public $timestamps = false;

    public function categories() {
        return $this->belongsTo(Category::class);
    }
}
