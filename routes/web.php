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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', ['uses'=>'HomeController@index', 'as'=>'home']);
Route::post('/', ['uses'=>'HomeController@create','as'=>'message.create']);
Route::delete('/message/delete/{id}',['uses'=>'HomeController@delete','as'=>'message.delete']);
Route::get('message/{id}/edit', ['uses'=>'HomeController@edit','as'=>'message.edit'])->where(['id'=>'[0-9]+']);
Route::post('message/{id}/edit', ['uses'=>'HomeController@update','as'=>'message.update'])->where(['id'=>'[0-9]+']);
