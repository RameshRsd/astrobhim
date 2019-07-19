<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainings extends Model
{
    protected $fillable=['training_title','training_content','training_banner','training_duration','training_cost'];

}
