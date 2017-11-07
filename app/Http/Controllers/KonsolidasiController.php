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
      $data = DB::select('SELECT nama_kelurahan,jumlah_penduduk FROM tbl_gabungan');
      $res['success'] = 200;
      $res['result'] = $data;
      return response($res);
    }
}
