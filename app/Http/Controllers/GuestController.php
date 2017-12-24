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
        return view('awal');
    }
    public function detil($id)
    {
        $data['result'] = \App\Api::where('id', $id)->first();
        $data['id'] = $id;
        return view('detil')->with($data);
    }

}
