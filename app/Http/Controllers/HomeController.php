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
        return view('hapus')->with($data);
    }
     public function nyobaan()
    {
        $data['result'] = \App\Api::all();
        $data['thisis'] = "endpoint";
        return view('nyobaan')->with($data);
    }
    public function awal()
    {
        $data['result'] = \App\Api::all();
        $data['thisis'] = "home";
        return view('awal')->with($data);
    }
    public function register(){
        return view('auth/register');
    }
    public function adduser(Request $request){
        $rules = [
            'username' => 'required|string|max:255|unique:tbl_users',
            'password' => 'required|string|min:6|confirmed',
        ];
        $this->validate($request, $rules);
  
        $input = $request->all();
        $status = \App\User::create([
            'username' => $input['username'],
            'password' => bcrypt($input['password']),
            'level' => 2,
        ]);
  
        if ($status) return redirect('/usermgmt')->with('success', 'User berhasil ditambahkan');
        else return redirect('/usermgmt')->with('error', 'User gagal ditambahkan');
      }
}
