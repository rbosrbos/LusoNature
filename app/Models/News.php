<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class News extends Model
{
  protected $fillable = [
    'id','user_id','title','body','summary'
  ];
    public $incrementing = false;
    protected $keyType = 'string';

    public function user() {
      return $this->belongsTo(User::class);
    }
}
