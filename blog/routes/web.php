<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('123',function(){
   return '123';
});
Route::get('love','Home\LoveController@index');
Route::get('love/{id}','Home\LoveController@info')
->where('id','[0-9]+');
Route::get('love/love','Home\LoveController@info');
Route::get('member','Home\LoveController@member');
