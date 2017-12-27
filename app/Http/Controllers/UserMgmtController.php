<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserMgmtController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $username = Auth::user()->username;

        if(Auth::user()->level==1){
            $data['result'] = User::all();
        }
        else if(Auth::user()->level==2){
            $data['result'] = User::where('username', '=', $username)->first();
        }
        return view('auth/dashboard')->with($data);
    }
    public function add()
    {
        $data['kapital'] = 0;
        return view('admin/adduser')->with($data);
    }
    public function delete($id)
    {
        $data['result'] = User::where('id', $id)->first();
        $data['id'] = $id;
        return view('admin/deleteuser')->with($data);
    }
     public function edit($id)
    {
        $data['result'] = User::where('id', '=', $id)->first();
        return view('admin/adduser')->with($data);
    }
    public function update(Request $request, $id){
        $rules = [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ];
        $this->validate($request, $rules);
        $input = $request->all();

        $level = Auth::user()->level;
        $status = User::where('id', $id)
                ->update([
                    'username' => $input['username'],
                    'password' => bcrypt($input['password']),
                    'level' => $level,
                ]);
    
        if ($status) return redirect('/usermgmt')->with('success', 'Username dan password berhasil diubah <br> Silahkan login kembali untuk melihat perubahan');
        else return redirect('/usermgmt')->with('error', 'Username dan password gagal diubah');
      }
    public function destroy(Request $request, $id) {
      $result = User::where('id', $id)->first();
      $status = $result->delete();

      if ($status) return redirect('/usermgmt')->with('success', 'User berhasil dihapus');
      else return redirect('/usermgmt')->with('error', 'User gagal dihapus');
    }
}
