<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public $table = 'projects';
    public $fillable = ['name','content','link','v_link'];
}
