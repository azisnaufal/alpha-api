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
Auth::routes();
Route::get('/', function () {
    return view('awal');
});
Route::get('/endpoint', 'GuestController@nyobaan')->name('nyobaan');
Route::get('/detil',  'GuestController@detil')->name('detil');
Route::get('/awal', function(){  
    return view('awal');
});


Route::group(['middleware'=>'auth'], function(){
    Route::get('/adduser','HomeController@register');
    Route::post('/adduser','HomeController@adduser');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/add', 'ApiController@index')->name('add');
    Route::post('/add', 'ApiController@store');
    Route::get('/delete/confirm/{id}', 'HomeController@deleteConfirm');
    Route::delete('/delete/{id}', 'ApiController@destroy');
    Route::get('/edit/{id}', 'ApiController@edit');
	Route::patch('/edit/{id}', 'ApiController@update');
});

Route::get('/key', function () {
    return str_random(64);
});
