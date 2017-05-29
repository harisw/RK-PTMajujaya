<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MQuotation;
use App\MItems;
use App\ListBarang;
class CCreateQuotation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = MItems::get();
        return view('quotation.create', ['item' => $item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $quotation = MQuotation::insertGetId(array(
        'nama_perusahaan' => $request->get('nama_perusahaan'),
        'nama_quotation' => $request->get('nama_quotation')
      ));
      $item = MItems::get();
      foreach($item as $i){
        if($request->get('barang'.$i->id)){
          ListBarang::insert([
            'barang_id' => $i->id,
            'quotation_id' => $quotation
          ]);
        }
      }
      return redirect('/quotation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
