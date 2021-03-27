<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $table = 'profiles';
    public $fillable = ['name','title','content','img','email','pass','type'];
}
