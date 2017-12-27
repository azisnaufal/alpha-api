<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMgmtController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['kapital'] = 0;
        return view('auth/dashboard')->with($data);
    }
}
