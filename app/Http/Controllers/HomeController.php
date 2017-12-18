<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /** 
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['result'] = \App\Api::all();
        
        return view('home')->with($data);
    }
    public function deleteConfirm($id)
    {
        $data['result'] = \App\Api::where('id', $id)->get();
        $data['id'] = $id;
        return view('admin/delete')->with($data);
    }
     public function nyobaan()
    {
        $data['result'] = \App\Api::all();
        return view('nyobaan')->with($data);
    }
    public function awal()
    {
        $data['result'] = \App\Api::all();
        return view('awal')->with($data);
    }

}
