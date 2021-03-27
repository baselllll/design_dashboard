<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $table = 'abouts';
    public $fillable = ['faculty','degree','gradeY','status','MS','exper'];
}
