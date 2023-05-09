<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/message',function(){
    return "Hello API's";
});

Route::get('/messageWithProperResponse',function(){
    return response()->json([
        'message' => 'Hello',
        'status code' => '200'
    ]);
});

//insert something to db 
            //api name  //user controller name //function name
Route::post('insitute', 'Institutes@create');