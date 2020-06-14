<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    
    public function places() {
        return $this->hasMany(Place::class);
    }
}
