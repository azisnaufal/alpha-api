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
Route::get('/nyobaan', 'HomeController@nyobaan')->name('nyobaan');


Auth::routes();
Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/add', 'ApiController@index')->name('add');
    Route::post('/add', 'ApiController@store');
    Route::delete('/delete/{id}', 'ApiController@destroy');
    Route::get('/edit/{id}', 'ApiController@edit');
	Route::patch('/edit/{id}', 'ApiController@update');
});

Route::get('/key', function () {
    return str_random(64);
});
