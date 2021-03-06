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

Route::get('/', function () {
    return view('welcome');
});
Route::get('tasks','TaskController@index');
Route::get('task/{id}','TaskController@show');
Route::post('task', 'TaskController@store');
Route::put('task/{id}','TaskController@update');
Route::delete('task/{id}','TaskController@delete');