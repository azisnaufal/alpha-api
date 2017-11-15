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
      if($request->query('kurang_dari')!=null){
        //get as string
        $kurang_dari = $request->query('kurang_dari');
        //do query
        $data = DB::select("SELECT id_kelurahan, nama_kelurahan, jumlah_penduduk FROM tbl_gabungan WHERE jumlah_penduduk < '$kurang_dari';");
        $res['success'] = 200;
        $res['result'] = $data;
        return response($res);
      }
      else{
        $data = DB::select('SELECT id_kelurahan,nama_kelurahan,jumlah_penduduk FROM tbl_gabungan');
        $res['success'] = 200;
        $res['data'] = $data;
        return response($res);
      }
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

      if($request->query('id_kelurahan')!=null && $request->query('id_kecamatan')){
        //get as string
        $id_kelurahan = $request->query('id_kelurahan');
        $id_kecamatan = $request->query('id_kecamatan');
        //do query
        $data = DB::select("SELECT nama_kecamatan, id_kelurahan, nama_kelurahan,kodepos, jumlah_rw, jumlah_rt, kode_kemendagri, jumlah_penduduk, luas_wilayah FROM tbl_gabungan WHERE id_kelurahan = '$id_kelurahan' AND id_kecamatan = '$id_kecamatan'");
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
      }
      else{
         $data = DB::select('SELECT nama_kecamatan, id_kelurahan, nama_kelurahan,kodepos, jumlah_rw, jumlah_rt, kode_kemendagri, jumlah_penduduk, luas_wilayah FROM tbl_gabungan WHERE id_kelurahan = id_kelurahan AND id_kecamatan = id_kecamatan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
      }

    }


    public function data_keagamaan_perkelurahan(Request $request)
    {

      if($request->query('id_kelurahan')!=null && $request->query('id_kecamatan')){
        //get as string
        $id_kelurahan = $request->query('id_kelurahan');
        $id_kecamatan = $request->query('id_kecamatan');
        //do query
         $data = DB::select("SELECT id_kelurahan, nama_kelurahan, jumlah_penduduk, agama_islam, agama_kristen, agama_katholik, agama_hindu, agama_budha, agama_konghucu, kepercayaan_lainnya FROM tbl_gabungan WHERE id_kelurahan = '$id_kelurahan' AND id_kecamatan = '$id_kecamatan'");
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
      }
      else{
        $data = DB::select('SELECT id_kelurahan, nama_kelurahan, jumlah_penduduk, agama_islam, agama_kristen, agama_katholik, agama_hindu, agama_budha, agama_konghucu, kepercayaan_lainnya FROM tbl_gabungan WHERE id_kelurahan = id_kelurahan AND id_kecamatan = id_kecamatan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
      }

      
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
      if($request->query('id_kecamatan')!=null){
        //get as string
        $id_kecamatan = $request->query('id_kecamatan');
        //do query
        $data = DB::select("SELECT id_kecamatan, nama_kecamatan, id_kelurahan, nama_kelurahan FROM tbl_gabungan WHERE id_kecamatan = '$id_kecamatan'");
        $res['success'] = 200;
        $res['result'] = $data;
        //return data
        return response($res);
      }
      else{
        $data = DB::select('SELECT id_kecamatan, nama_kecamatan, id_kelurahan, nama_kelurahan FROM tbl_gabungan WHERE id_kecamatan = id_kecamatan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
      }

      
    }



    
    public function data_kependudukan_perkelurahan(Request $request)
    {
      if($request->query('id_kelurahan')!=null && $request->query('id_kecamatan')){
        //get as string
        $id_kelurahan = $request->query('id_kelurahan');
        $id_kecamatan = $request->query('id_kecamatan');
        //do query
       $data = DB::select("SELECT id_kelurahan, nama_kelurahan, jumlah_penduduk, jumlah_pria, jumlah_wanita, belum_kawin, kawin, `usia_0_4`,`usia_5_9`, `usia_10_14`,`usia_15_19`,`usia_20_24`,`usia_25_29`,`usia_30_34`,`usia_35_39`,`usia_40_44`,`usia_45_49`,`usia_50_54`,`usia_55_59`,`usia_60_64`,`usia_65_69`,`usia_70_74`,`usia_75_keatas` FROM `tbl_gabungan` WHERE id_kelurahan = '$id_kelurahan' AND id_kecamatan ='$id_kecamatan'");
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
        
      }
      else{

      $data = DB::select('SELECT id_kelurahan, nama_kelurahan, jumlah_penduduk, jumlah_pria, jumlah_wanita, belum_kawin, kawin, `usia_0_4`,`usia_5_9`, `usia_10_14`,`usia_15_19`,`usia_20_24`,`usia_25_29`,`usia_30_34`,`usia_35_39`,`usia_40_44`,`usia_45_49`,`usia_50_54`,`usia_55_59`,`usia_60_64`,`usia_65_69`,`usia_70_74`,`usia_75_keatas` FROM `tbl_gabungan` WHERE id_kelurahan = id_kelurahan AND id_kecamatan = id_kecamatan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
      }


    }


   
     public function data_kelurahan(Request $request)
    {
      if($request->query('id_kelurahan')!=null && $request->query('id_kecamatan')){
        //get as string
        $id_kelurahan = $request->query('id_kelurahan');
        $id_kecamatan = $request->query('id_kecamatan');
        //do query
        $data = DB::select("SELECT nama_kecamatan, id_kelurahan, nama_kelurahan, kodepos, jumlah_rw, jumlah_rt, kode_kemendagri, jumlah_penduduk, luas_wilayah FROM tbl_gabungan WHERE id_kelurahan = '$id_kelurahan' AND id_kecamatan = '$id_kecamatan'");
        $res['success'] = 200;
        $res['result'] = $data;
        //return data
        return response($res);
        
      }
      else{
        $data = DB::select('SELECT nama_kelurahan, jumlah_rw, jumlah_rt, kodepos, jumlah_penduduk, jumlah_pria, jumlah_wanita, luas_wilayah, kepadatan FROM tbl_gabungan WHERE id_kelurahan = id_kelurahan AND id_kecamatan = id_kecamatan');
        $res['success'] = 200;
        $res['result'] = $data;
        return response($res);
      }
      
    }

    public function jumlah_penduduk_perkelurahan_menurut_agama(Request $request)
    {
      if($request->query('agama')!=null ){
        //get as string
        $agama = $request->query('agama');
        //do query
        $data = DB::select("SELECT id_kelurahan, nama_kelurahan, agama_$agama FROM tbl_gabungan");
        $res['success'] = 200;
        $res['result'] = $data;
        //return data
        return response($res);
        
      }
      else{
        $data = DB::select('SELECT
          `id_kelurahan`
          , `nama_kelurahan`
          , `agama_budha`
          , `agama_hindu`
          , `agama_islam`
          , `agama_katholik`
          , `agama_kepercayaan`
          , `agama_konghucu`
          , `agama_kristen`
        FROM
          `tbl_gabungan`');
        $res['success'] = 200;
        $res['result'] = $data;
        return response($res);
      }
      
    }
    public function data_penduduk_berdasarakan_golongan_darah_perkecamatan(\Symfony\Component\HttpFoundation\Request $request){
      $data = DB::select('SELECT id_kecamatan, nama_kecamatan, SUM(goldar_a) AS goldar_a, SUM(goldar_a_min) AS goldar_a_min, SUM(goldar_a_plus) AS goldar_a_plus, SUM(goldar_ab) AS goldar_ab, SUM(goldar_b_min)AS goldar_b_min, SUM(goldar_ab_plus) AS goldar_ab_plus, SUM(goldar_b) AS goldar_b, SUM(goldar_b_min) AS goldar_b_min, SUM(goldar_b_plus)AS goldar_b_plus, SUM(goldar_o) AS goldar_o, SUM(goldar_o_min) AS goldar_o_min, SUM(goldar_o_plus) AS goldar_o_plus, SUM(goldar_tidak_diketahui) AS goldar_tidak_diketahui FROM tbl_gabungan GROUP BY id_kecamatan;');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }
    public function data_pertumbuhan_penduduk_thn_2013_2016_perkelurahan(\Symfony\Component\HttpFoundation\Request $request){
      $data = DB::select('SELECT id_kelurahan, nama_kelurahan, pertumbuhan_penduduk_2013, pertumbuhan_penduduk_2014, pertumbuhan_penduduk_2015, pertumbuhan_penduduk_2016 FROM tbl_gabungan;');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }
    public function data_usia_pendidikan_kecamatan(\Symfony\Component\HttpFoundation\Request $request){
      $data = DB::select('SELECT id_kecamatan, nama_kecamatan, SUM(usia_pendidikan_12_14) AS usia_pendidikan_12_14, SUM(usia_pendidikan_15_17) AS usia_pendidikan_15_17, SUM(usia_pendidikan_18_22) AS usia_pendidikan_18_22, SUM(usia_pendidikan_3_4) AS usia_pendidikan_3_4, SUM(usia_pendidikan_5) AS usia_pendidikan_5, SUM(usia_pendidikan_6_11) AS usia_pendidikan_6_11 FROM tbl_gabungan GROUP BY id_kecamatan;');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }
    public function jumlah_pensiunan_di_kecamatan_tertentu(Request $request){
      $data = DB::select('SELECT id_kecamatan, nama_kecamatan, SUM(pensiunan) AS pensiunan FROM tbl_gabungan GROUP BY id_kecamatan;');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }
    public function jumlah_yang_tidak_bekerja_di_suatu_kecamatan(\Symfony\Component\HttpFoundation\Request $request){
      $data = DB::select('SELECT id_kecamatan , nama_kecamatan, SUM(belum_tidak_bekerja) AS belum_tidak_bekerja FROM tbl_gabungan GROUP BY id_kecamatan;');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }
    public function jumlah_tenaga_kesehatan_tiap_wilayah(\Symfony\Component\HttpFoundation\Request $request){
      $data = DB::select('SELECT id_wilayah, nama_wilayah, SUM(tenaga_kesehatan) AS tenaga_kesehatan FROM tbl_gabungan GROUP BY id_kecamatan;');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }
    public function jumlah_tenaga_pengajar_tiap_wilayah(\Symfony\Component\HttpFoundation\Request $request){
      $data = DB::select('SELECT id_wilayah, nama_wilayah, SUM(tenaga_pengajar) AS tenaga_pengajar FROM tbl_gabungan GROUP BY id_kecamatan;');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }
}
