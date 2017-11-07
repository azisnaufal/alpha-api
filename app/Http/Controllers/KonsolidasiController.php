<?php

namespace alpha-api\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use alpha-api\Http\Controllers\Controller;
use alpha-api\Konsolidasi;

class KonsolidasiController extends Controller
{
    /**
     * Get all data from tbl_konsolidasi
     */
    public function index(Request $request)
    {
      $data = DB::select('select * from tbl_gabungan');
      $res['success'] = true;
      $res['result'] = $data;
      return response($res);
    }
}
