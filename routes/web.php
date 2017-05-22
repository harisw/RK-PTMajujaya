<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/quotation', function () {
    return view('quotation');
});

Route::get('/payment_receipt', function () {
    return view('payment_receipt');
});

Route::get('/delivery_order', function () {
    return view('delivery_order');
});