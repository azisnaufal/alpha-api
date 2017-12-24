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

// Route::get('/{link?}','KonsolidasiController@link')->where('link', '(.*)');;
Route::get('/konsolidasi', 'KonsolidasiController@index');
Route::get('/konsolidasi/jumlah/penduduk/kelurahan', 'KonsolidasiController@jumlah_penduduk_perkelurahan');
Route::get('/konsolidasi/jumlah/penduduk/kecamatan', 'KonsolidasiController@jumlah_penduduk_perkecamatan');
Route::get('/konsolidasi/jumlah/penduduk/kelurahan/agama','KonsolidasiController@jumlah_penduduk_perkelurahan_menurut_agama');
Route::get('/konsolodasi/jumlah/penduduk/kecamatan/goldar', 'KonsolidasiController@data_penduduk_berdasarakan_golongan_darah_perkecamatan');
Route::get('/konsolidasi/jumlah/kelurahan/kecamatan','KonsolidasiController@jumlah_kelurahan_perkecamatan');
Route::get('/konsolidasi/jumlah/penduduk/usia_pendidikan/kecamatan','KonsolidasiController@data_usia_pendidikan_kecamatan');
Route::get('/konsolidasi/jumlah/pensiunan/kecamatan','KonsolidasiController@jumlah_pensiunan_di_kecamatan_tertentu');
Route::get('/konsolidasi/jumlah/belum_tidak_bekerja/kecamatan','KonsolidasiController@jumlah_yang_tidak_bekerja_di_suatu_kecamatan');
Route::get('/konsolidasi/jumlah/tenaga/kesehatan/wilayah','KonsolidasiController@jumlah_tenaga_kesehatan_tiap_wilayah');
Route::get('/konsolidasi/jumlah/tenaga/pengajar/wilayah','KonsolidasiController@jumlah_tenaga_pengajar_tiap_wilayah');
Route::get('/konsolidasi/jumlah/wajib_ktp/kecamatan','KonsolidasiController@jumlah_wajib_ktp_tiap_kecamatan');
Route::get('/konsolidasi/jumlah/rt/kelurahan','KonsolidasiController@jumlah_rt_tiap_kelurahan');
Route::get('/konsolidasi/jumlah/pria_wanita','KonsolidasiController@jumlah_lp');
Route::get('/konsolidasi/jumlah/pns/kecamatan','KonsolidasiController@jumlah_pns_perkecamatan');

Route::get('/konsolidasi/wilayah/keterangan', 'KonsolidasiController@no_3');
Route::get('/konsolidasi/wilayah/luas/kecamatan', 'KonsolidasiController@luas_wilayah_perkecamatan');
Route::get('/konsolidasi/wilayah/', 'KonsolidasiController@wilayah');

Route::get('/konsolidasi/data/kelurahan/', 'KonsolidasiController@kelurahan');
Route::get('/konsolidasi/data/penduduk/kelurahan/','KonsolidasiController@data_kependudukan_perkelurahan');
Route::get('/konsolidasi/data/wilayah','KonsolidasiController@data_wilayah');
Route::get('/konsolidasi/data/kelurahan/kecamatan/','KonsolidasiController@data_kelurahan_perkecamatan');
Route::get('/konsolidasi/data/keagamaan/kelurahan','KonsolidasiController@data_keagamaan_perkelurahan');
Route::get('/konsolidasi/data/nama_kelurahan/kecamatan/','KonsolidasiController@nama_kelurahan_perkecamatan');
Route::get('/konsolidasi/data/data_kelurahan/','KonsolidasiController@data_kelurahan');
Route::get('/konsolidasi/data/pertumbuhan_penduduk_thn_2013_2016/kelurahan','KonsolidasiController@data_pertumbuhan_penduduk_thn_2013_2016_perkelurahan');


Route::get('/test_empty', 'KonsolidasiController@empty');
