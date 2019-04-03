<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes ;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'category_id','user_id','featrued'
    ];

    protected $dates = ['dleted_At'];



    public function category(){
        return  $this->belongsTo('App\Category');
    }

    public function tags(){

        return $this->belongsToMany('App\tags');
    }

    public function user(){
        return  $this->belongsTo('App\User');
    }
}
