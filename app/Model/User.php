<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    public $timestamps = false;

    function tags(){
    	return $this->hasMany('App\Model\Tags', 'user_id', 'id');
    }
    function images(){
    	return $this->hasMany('App\Model\Images', 'user_id', 'id');
    }
}
