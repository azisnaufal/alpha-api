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
}
