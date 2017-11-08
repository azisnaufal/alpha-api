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
Route::get('/ex', function (Request $request) {
    return $request->segment(1);
});
Route::get('/konsolidasi', 'KonsolidasiController@index');
<<<<<<< HEAD

Route::get('/konsolidasi/jumlah/penduduk_perkelurahan', 'KonsolidasiController@jumlah_penduduk_perkelurahan');
Route::get('/konsolidasi/jumlah/penduduk_perkecamatan', 'KonsolidasiController@jumlah_penduduk_perkecamatan');
Route::get('/konsolidasi/wilayah/keterangan', 'KonsolidasiController@no_3');
Route::get('/konsolidasi/wilayah/luas/kecamatan', 'KonsolidasiController@luas_wilayah_perkecamatan');
Route::get('/konsolidasi/wilayah/', 'KonsolidasiController@wilayah');
Route::get('/konsolidasi/kelurahan/', 'KonsolidasiController@kelurahan');
=======
Route::get('/konsolidasi/jumlah/penduduk_perkelurahan', 'KonsolidasiController@jumlah_penduduk_perkelurahan');
Route::get('/konsolidasi/jumlah/kelurahan_perkecamatan','KonsolidasiController@jumlah_kelurahan_perkecamatan');
Route::get('/konsolidasi/data/penduduk_perkelurahan','KonsolidasiController@data_kependudukan_perkelurahan');
Route::get('/konsolidasi/data/data_wilayah','KonsolidasiController@data_wilayah');
Route::get('/konsolidasi/data/data_kelurahan_perkecamatan','KonsolidasiController@data_kelurahan_perkecamatan');
Route::get('/konsolidasi/data/data_keagamaan_perkelurahan','KonsolidasiController@data_keagamaan_perkelurahan');
Route::get('/konsolidasi/data/data_nama_kelurahan_perkecamatan','KonsolidasiController@nama_kelurahan_perkecamatan');
Route::get('/konsolidasi/data/data_kelurahan','KonsolidasiController@data_kelurahan');
>>>>>>> 7c64a5bbc6c5c5c28a57717b09413413f01bc27d
