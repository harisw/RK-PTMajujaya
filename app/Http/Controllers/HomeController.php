<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MQuotation;

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

    public function quotation(Request $request)
    {
      if(!$request->session()->has('user'))
        return redirect('/login');

      $quo = MQuotation::get();
      return view('quotation.index', ['quotation' => $quo]);
    }
}
