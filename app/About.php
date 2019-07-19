<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable=['introduction','mission','indentity','office_name','office_address','office_tel','office_mob','office_email','goal'];
}
