<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::resource('','PaisesController');
//Route::resource('paises','PaisesController');

Route::post('/paises/store','PaisesController@store');
Route::post('/paises/update/{id}','PaisesController@update');
Route::get('/paises/destroy/{id}','PaisesController@destroy');


Route::controller('paises','PaisesController');