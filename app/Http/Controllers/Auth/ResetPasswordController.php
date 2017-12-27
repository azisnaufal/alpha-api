<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    // use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = '/usermgmt';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $id){
        $rules = [
            'username' => 'required|string|max:255|unique:tbl_users',
            'password' => 'required|string|min:6|confirmed',
        ];
        $this->validate($request, $rules);
        $input = $request->all();
        
        $status = $result->where('id',$id)->update($input);
  
        if ($status) return redirect('/usermgmt')->with('success', 'Username dan password berhasil diubah');
        else return redirect('/usermgmt')->with('error', 'Username dan password berhasil diubah');
      }
}
