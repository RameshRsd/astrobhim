<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    protected $fillable=['user_id','comment_content','news_status','news_view','name','news_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function newsfeeds(){
        return $this->belongsTo(NewsFeed::class,'news_id');
    }


}
