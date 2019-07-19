<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsFeed extends Model
{
    protected $fillable=['user_id','news_title','news_photo','news_description','views'];
    public function comments(){
        return $this->hasMany('App\Comment', 'news_id')->where('news_status','Active');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
