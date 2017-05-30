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

Route::get('/', 'HomeController@index');

Route::get('login', 'AuthController@login');
Route::post('login', 'AuthController@login_auth');

Route::resource('items', 'CManageItems');

Route::get('/quotation', 'HomeController@quotation');
Route::get('/quotation/create', 'CCreateQuotation@index');
Route::post('/quotation', 'CCreateQuotation@store');

Route::get('/payment_receipt', 'CCreatePaymentofReceipt@index');

Route::get('/delivery_order', function () {
    return view('delivery_order');
});
