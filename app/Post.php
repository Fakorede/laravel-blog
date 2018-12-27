<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{


    use SoftDeletes;

    // The attributes that are mass assignable
    protected $fillable = [
      'title', 'content', 'category_id', 'featured', 'slug'
  ];

    protected $dates = ['deleted_at'];

    public function category() {
      return $this->belongsTo('App\Category');
    }
}
