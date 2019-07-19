<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as ValidUser;
class User extends ValidUser
{

    protected $fillable=['name','username','email','image','user_type','password'];

    public function newsfeed(){
        return  $this->hasMany('App\NewsFeed');
    }
    public function gallery(){
    return  $this->hasMany('App\Gallery');
}
}
