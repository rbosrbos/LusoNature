<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    
    protected $keyType = 'string';
    protected $fillable = [
        'id', 'place_id', 'user_id'
    ];
    public $incrementing = false;
}
