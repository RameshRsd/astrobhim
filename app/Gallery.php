<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable=['cat_id','title','description','photo'];

    public function category(){
        return $this->belongsTo('App\Category','cat_id');
    }
}
