<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(Request $request)
    {
      if($request->session()->has('user'))
      {
        return view('home');
      }
      else{
        return redirect('/login');
      }
    }
}