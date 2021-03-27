<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class selekon extends Controller
{
    public function display($state){
        return view('dashboard.parials.skeletonloading');
    }
}
