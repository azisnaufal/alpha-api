<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;

class GuestController extends Controller
{
    //
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
    public function detil()
    {
        $data['result'] = \App\Api::all();
        return view('detil')->with($data);
    }

}
