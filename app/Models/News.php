<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class News extends Model
{
  protected $fillable = [
    'uuid','user_id','title','body','summary'
  ];

    public function user() {
      return $this->belongsTo(User::class);
    }
}
