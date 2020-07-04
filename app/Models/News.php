<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class News extends Model
{
  protected $fillable = [
    'uuid','admin_id','title','body','summary'
  ];

    public function admin() {
      return $this->belongsTo(Admin::class);
    }
}
