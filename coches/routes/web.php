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

Route::get('/add', function () {
    return view('form');
});

Route::get('/', 'CocheController@index');
Route::get('/coches', 'CocheController@index');
Route::get('/coche/{id}', 'CocheController@show');
Route::get('/delete/{id}', 'CocheController@destroy');