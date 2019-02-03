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
    return view('page/home');
});

Route::get('/page','KostController@index');
Route::get('/page/{id}','KostController@show');

Route::get('/viewmaster', function () {
    return view('layouts/master');
});
