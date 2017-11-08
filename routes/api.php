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

Route::get('/konsolidasi/jumlah/penduduk_perkelurahan', 'KonsolidasiController@jumlah_penduduk_perkelurahan');
Route::get('/konsolidasi/jumlah/penduduk_perkecamatan', 'KonsolidasiController@jumlah_penduduk_perkecamatan');
Route::get('/konsolidasi/wilayah/keterangan', 'KonsolidasiController@no_3');
Route::get('/konsolidasi/wilayah/luas/kecamatan', 'KonsolidasiController@luas_wilayah_perkecamatan');
Route::get('/konsolidasi/wilayah/', 'KonsolidasiController@wilayah');
Route::get('/konsolidasi/kelurahan/', 'KonsolidasiController@kelurahan');
Route::get('/konsolidasi/jumlah/penduduk_perkelurahan', 'KonsolidasiController@jumlah_penduduk_perkelurahan');
Route::get('/konsolidasi/jumlah/kelurahan_perkecamatan','KonsolidasiController@jumlah_kelurahan_perkecamatan');
Route::get('/konsolidasi/data/penduduk_perkelurahan','KonsolidasiController@data_kependudukan_perkelurahan');
Route::get('/konsolidasi/data/wilayah','KonsolidasiController@data_wilayah');
Route::get('/konsolidasi/data/kelurahan_perkecamatan','KonsolidasiController@data_kelurahan_perkecamatan');
Route::get('/konsolidasi/data/keagamaan/kelurahan','KonsolidasiController@data_keagamaan_perkelurahan');
Route::get('/konsolidasi/data/nama_kelurahan/kecamatan','KonsolidasiController@nama_kelurahan_perkecamatan');
Route::get('/konsolidasi/data/data_kelurahan/','KonsolidasiController@data_kelurahan');
