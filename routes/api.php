<?php

Route::get('/profileapi',function()
{
    $data = \App\Profile::all();
    return response()->json($data);
});


Route::get('/pudataprofileapi',function()
{
    $data = \App\Profile::create([
        "email"=> "baselosama5005@yahoo.com",
        "pass"=> "8989898",
        "name"=> "baosama",
        "title"=> "web ",
        "content"=> "my name is basel and i work web developer at minda compamy at 1 yewar exper",
        "img"=> "baselllll.jpg",
        "type"=> "admin",
    ]);
    return response()->json(['Msg'=>'The data is inserted sucess']);
});

