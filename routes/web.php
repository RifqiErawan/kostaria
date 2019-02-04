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

Route::get('/','PageController@getIndex');
Route::resource('kost','KostController');
// Route::get('/about','PageController@getAbout');
// Route::get('/contact','PageController@getContact');

// Route::get('/survey','PageController@getSurvey');
// Route::get('/upload','PageController@getSurvey');
// Route::get('/survey','PageController@getSurvey');

// Route::get('/page/{id}','PageController@show');
