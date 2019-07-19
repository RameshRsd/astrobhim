<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    protected $fillable=['name','title','intro','number','photo','user_id'];
}
