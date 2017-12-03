<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
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
        return view('admin/form');
    }
    public function store(Request $request){
		$rules = [
			'judul'	=> 'required|max:191',
            'sql_stat'		=> 'required|max:191',
            'url' => 'required|max:200'
		];
		$this->validate($request, $rules);

		$input = $request->all();
		$status = \App\Api::create($input);

		if ($status) return redirect('/home')->with('success', 'Api berhasil ditambahkan');
		else return redirect('/home')->with('error', 'Api gagal ditambahkan');
    }
    
    public function destroy(Request $request, $id) {
		$result = \App\Api::where('id', $id)->first();
		$status = $result->delete();

		if ($status) return redirect('/home')->with('success', 'Data berhasil dihapus');
		else return redirect('/home')->with('error', 'Data gagal dihapus');
    }
    public function edit($id) {
		$data['result'] = \App\Api::where('id', $id)->first();
		return view('admin/form')->with($data);
    }
    public function update(Request $request, $id){
		$rules = [
			'judul'	=> 'required|max:191',
            'sql_stat'		=> 'required|max:191',
            'url' => 'required|max:200'
		];
		$this->validate($request, $rules);

		$input = $request->all();
		$result = \App\Api::where('id', $id)->first();
		$status = $result->update($input);

		if ($status) return redirect('/home')->with('success', 'Data berhasil diubah');
		else return redirect('/home')->with('error', 'Data gagal diubah');
	}
}