<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MQuotation;
use DB;

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
      $detail = DB::table('listbarang')->join('databarang', 'listbarang.barang_id', '=', 'databarang.id_barang')->get();
      //dd($detail);
      return view('quotation.index', [
        'quotation' => $quo,
        'detail' => $detail]);
    }
}
