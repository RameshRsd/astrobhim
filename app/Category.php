<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gallery;

class Category extends Model
{
    protected $fillable=['name','description'];

    public function galleries(){
        return $this->hasMany('App\Gallery', 'cat_id');
    }

}
