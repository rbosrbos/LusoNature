<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
  use HasFactory;
  protected $fillable = [
    'uuid', 'admin_id', 'title', 'body', 'summary'
  ];

  public function admin()
  {
    return $this->belongsTo(Admin::class);
  }
}
