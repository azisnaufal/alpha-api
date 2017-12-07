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
     public function nyobaan()
    {
        $data['result'] = \App\Api::all();
        return view('nyobaan')->with($data);
    }
    public function homeku()
    {
        $data['result'] = \App\Api::all();
        return view('homeasli')->with($data);
    }

}
