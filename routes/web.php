<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//dashboard
Route::prefix('/dashboard')->group(function () {
    //project
    Route::get('projects','dashboard\Projects@index');
    Route::get('projects/delete/{id?}','dashboard\Projects@destroy');
    Route::get('projects/edit/{id?}','dashboard\Projects@edit');
    Route::get('projects/update/{id?}','dashboard\Projects@update');
    Route::get('projects/add','dashboard\Projects@create');
    Route::post('projects/store','dashboard\Projects@store');
    //about
    Route::get('about','dashboard\About@index');
    Route::get('about/delete/{id?}','dashboard\About@destroy');
    Route::get('about/edit/{id?}','dashboard\About@edit');
    Route::get('about/add','dashboard\About@create');
    Route::post('about/store','dashboard\About@store');
    //profile
    Route::get('/profile','dashboard\Users@index');
    Route::post('/profile/update/{id?}','dashboard\Users@update');
    //dash auth
    Route::get('/dashauth','dashboard\authcontroller@index');
    Route::post('/login','dashboard\authcontroller@login');
    Route::get('/logout','dashboard\authcontroller@logout');
});
//front end
Route::get('/index',function (){
    return view('index');
});
