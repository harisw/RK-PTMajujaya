<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MQuotation;
use App\MItems;

class CCreatePaymentofReceipt extends Controller
{

    public function index()
    {
      $quo = MQuotation::get();
      $item = MItems::get();

      return view('payment_receipt.index', ['quotation' => $quo, 'item' => $item]);
    }
}
