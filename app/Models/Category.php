<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    public $incrementing = false;

    public function places() {
        return $this->hasMany(Place::class);
    }
}
