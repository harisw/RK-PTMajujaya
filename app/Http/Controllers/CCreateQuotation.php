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
      $total = 0;
      $item = MItems::get();
      foreach($item as $i){
        if($request->get('barang'.$i->id_barang)){
          $harga = MItems::select('harga')
                  ->where('id_barang', '=', $i->id_barang)->get();
          $subtotal[$i->id_barang] = $harga[0]->harga*$request->get('jumlah'.$i->id_barang);
          $total += ($harga[0]->harga*$request->get('jumlah'.$i->id_barang));
        }
      }
      //dd($total);
      $data =array(
        'nama_perusahaan' => $request->get('nama_perusahaan'),
        'nama_quotation' => $request->get('nama_quotation'),
        'total_harga' => $total
      );
      $quotation = MQuotation::create($data);

      foreach($item as $i){
        if($request->get('barang'.$i->id_barang)){
          $data = array(
            'barang_id' => $i->id_barang,
            'quotation_id' => $quotation->id_barang,
            'jumlah_barang' => $request->get('jumlah'.$i->id_barang),
            'subtotal' => $subtotal[$i->id_barang]
          );
          ListBarang::create($data);
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
