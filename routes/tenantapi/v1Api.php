<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function(){
    return 'working';
});

Route::get('/ping', function () {
    return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
});

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user', function(Request $request){
       return $request->user();
    });
});