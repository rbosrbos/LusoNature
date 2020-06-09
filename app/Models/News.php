<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class News extends Model
{
    public $incrementing = false;

    public function user() {
      return $this->belongsTo(User::class);
    }
}
