<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/konsolidasi', 'KonsolidasiController@index');
Route::get('/konsolidasi/jumlah/penduduk_perkelurahan', 'KonsolidasiController@jumlah_penduduk_perkelurahan');
Route::get('/konsolidasi/jumlah/kelurahan_perkecamatan','KonsolidasiController@jumlah_kelurahan_perkecamatan');
Route::get('/konsolidasi/data/penduduk_perkelurahan','KonsolidasiController@data_kependudukan_perkelurahan');
Route::get('/konsolidasi/data/data_wilayah','KonsolidasiController@data_wilayah');
Route::get('/konsolidasi/data/data_kelurahan_perkecamatan','KonsolidasiController@data_kelurahan_perkecamatan');
Route::get('/konsolidasi/data/data_keagamaan_perkelurahan','KonsolidasiController@data_keagamaan_perkelurahan');
Route::get('/konsolidasi/data/data_nama_kelurahan_perkecamatan','KonsolidasiController@nama_kelurahan_perkecamatan');
Route::get('/konsolidasi/data/data_kelurahan','KonsolidasiController@data_kelurahan');
