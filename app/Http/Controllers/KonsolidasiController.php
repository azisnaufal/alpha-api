<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Konsolidasi;

class KonsolidasiController extends Controller
{
    /**
     * Get all data from tbl_konsolidasi
     */


    public function index(Request $request)
    {
      $data = DB::select('select * from tbl_gabungan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);

      
    }
    public function jumlah_penduduk_perkelurahan(Request $request)
    {
      $data = DB::select('SELECT id_kelurahan,nama_kelurahan,jumlah_penduduk FROM tbl_gabungan');
      $res['success'] = 200;
      $res['data'] = $data;
      return response($res);
    }
    public function jumlah_penduduk_perkecamatan(Request $request)
    {
      $data = DB::select('SELECT id_kecamatan,nama_kecamatan, (SELECT SUM(jumlah_penduduk)) as jumlah_penduduk FROM tbl_gabungan GROUP BY nama_kecamatan');
      $res['success'] = 200;
      $res['data'] = $data;
      return response($res);
    }
    public function no_3(Request $request){
      $data = DB::select('SELECT nama_kecamatan, nama_kelurahan, kodepos, jumlah_rw, jumlah_rt, jumlah_penduduk, luas_wilayah, kepadatan FROM tbl_gabungan');
      $res['sucsess'] = 200;
      $res['data'] = $data;
      return response($res);
    }
    public function luas_wilayah_perkecamatan(Request $request){
      $data = DB::select('SELECT nama_kecamatan , (SELECT SUM(luas_wilayah)) as luas_wilayah FROM tbl_gabungan GROUP BY nama_kecamatan');
      $res['sucsess'] = 200;
      $res['data'] = $data;
      return response($res);
    }
    public function wilayah(Request $request){
      $data = DB::select('SELECT id_wilayah, nama_wilayah FROM tbl_gabungan GROUP BY nama_wilayah');
      $res['sucsess'] = 200;
      $res['data'] = $data;
      return response($res);
    }
    public function kecamatan(Request $request){
      $data = DB::select('SELECT `id_kecamatan`, `nama_kecamatan` FROM `tbl_gabungan` GROUP BY nama_kecamatan');
      $res['sucsess'] = 200;
      $res['data'] = $data;
      return response($res);
    }
    public function kelurahan(Request $request){
      $data = DB::select('SELECT `id_kelurahan`, `nama_kelurahan` FROM tbl_gabungan GROUP BY nama_kelurahan');
      $res['sucsess'] = 200;
      $res['data'] = $data;
      return response($res);
    }



    ///adit
     public function data_wilayah(Request $request)
    {
      $data = DB::select('SELECT nama_wilayah, nama_kecamatan, nama_kelurahan, jumlah_rw, jumlah_rt, kodepos, jumlah_penduduk, jumlah_pria, jumlah_wanita, luas_wilayah, kepadatan FROM tbl_gabungan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }


    public function data_kelurahan_perkecamatan(Request $request)
    {
      $data = DB::select('SELECT nama_kecamatan, id_kelurahan, nama_kelurahan,kodepos, jumlah_rw, jumlah_rt, kode_kemendagri, jumlah_penduduk, luas_wilayah FROM tbl_gabungan WHERE id_kelurahan = id_kelurahan AND id_kecamatan = id_kecamatan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }


    public function data_keagamaan_perkelurahan(Request $request)
    {
      $data = DB::select('SELECT id_kelurahan, nama_kelurahan, jumlah_penduduk, agama_islam, agama_kristen, agama_katholik, agama_hindu, agama_budha, agama_konghucu, kepercayaan_lainnya FROM tbl_gabungan WHERE id_kelurahan = id_kelurahan AND id_kecamatan = id_kecamatan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }




    public function jumlah_kelurahan_perkecamatan(Request $request)
    {
      $data = DB::select('SELECT id_kecamatan, nama_kecamatan, (SELECT COUNT(nama_kelurahan)) as Jmlah_kelurahan FROM tbl_gabungan GROUP BY nama_kecamatan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }

    public function nama_kelurahan_perkecamatan(Request $request)
    {
      $data = DB::select('SELECT id_kecamatan, nama_kecamatan, id_kelurahan, nama_kelurahan FROM tbl_gabungan WHERE id_kecamatan = id_kecamatan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }



    
    public function data_kependudukan_perkelurahan(Request $request)
    {
      $data = DB::select('SELECT id_kelurahan, nama_kelurahan, jumlah_penduduk, jumlah_pria, jumlah_wanita, belum_kawin, kawin, `usia_0_4`,`usia_5_9`, `usia_10_14`,`usia_15_19`,`usia_20_24`,`usia_25_29`,`usia_30_34`,`usia_35_39`,`usia_40_44`,`usia_45_49`,`usia_50_54`,`usia_55_59`,`usia_60_64`,`usia_65_69`,`usia_70_74`,`usia_75_keatas` FROM `tbl_gabungan` WHERE id_kelurahan = id_kelurahan AND id_kecamatan = id_kecamatan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }


   
     public function data_kelurahan(Request $request)
    {
      $data = DB::select('SELECT nama_kelurahan, jumlah_rw, jumlah_rt, kodepos, jumlah_penduduk, jumlah_pria, jumlah_wanita, luas_wilayah, kepadatan FROM tbl_gabungan WHERE id_kelurahan = id_kelurahan AND id_kecamatan = id_kecamatan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }


   


}
