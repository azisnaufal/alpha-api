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
    public function add()
    {
        $data['kapital'] = 0;
        return view('admin/adduser')->with($data);
    }
        public function delete()
    {
        $data['kapital'] = 0;
        return view('admin/deleteuser')->with($data);
    }
     public function edit()
    {
        $data['kapital'] = 0;
        return view('admin/adduser')->with($data);
    }
}
