<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{


    protected $fillable = ['name'];


    public function posts()
    {
    	return $this->belongsToMany('App\Post')->paginate(4);
    }
}
