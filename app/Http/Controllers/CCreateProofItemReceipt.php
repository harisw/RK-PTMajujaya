<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MQuotation;
use App\ListBarang;
use App\MItems;
use DB;

class CCreateProofItemReceipt extends Controller
{

  public function index(Request $request)
  {
    if(!$request->session()->has('user'))
      return redirect('/login');

    $quo = MQuotation::get();
    $detail = DB::table('listbarang')->join('databarang', 'listbarang.barang_id', '=', 'databarang.id_barang')->get();
    //dd($detail);
    return view('proof_item.index', [
      'quotation' => $quo,
      'detail' => $detail]);
  }
}
