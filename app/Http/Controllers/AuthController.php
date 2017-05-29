<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{

    public function login()
    {
      return view('login');
    }

    public function login_auth(Request $request)
    {
      $user_login = User::where([
        ['nama_user', '=', $request->get('nama_user')],
        ['pass_user', '=', $request->get('pass_user')]
      ])->get();
      if(!empty($user_login)){
        session(['user' => $request->get('nama_user')]);
        return redirect('/');
      }
      else{
        return redirect('/login');
      }
    }
}
