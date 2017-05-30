<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MItems;

class CManageItems extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $items = MItems::get();
		
        return view('items.index', ['items' => $items ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = MItems::create($request->all());
		$request->session()->flash('status_t_barang','Data barang berhasil ditambah');
        return redirect('/items');
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
    public function edit(Request $req, $id_barang)
    {
        $item = MItems::where('id_barang', '=', $id_barang)->get();
		
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_barang)
    {
        $item = MItems::where('id_barang', '=', $id_barang)
                        ->update(['nama_barang' => $request->get('nama_barang'),
                                  'harga' => $request->get('harga'),
                                  'stock' => $request->get('stock')]);
        //$item->update($request->all());
		$request->session()->flash('status_t_barang','Data barang berhasil diupdate');
        return redirect('/items');
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
