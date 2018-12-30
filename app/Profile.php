<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function User() {
        return $this->belongsTo('App\User');
    }
    // fillable fields
    protected $fillable = ['user_id', 'avatar', 'about', 'facebook', 'twitter', 'linkedin', 'medium', 'github'];
}
