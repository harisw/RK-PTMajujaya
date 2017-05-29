<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MItems extends Model
{

    protected $table = 'DataBarang';
    protected $fillable = [
      'nama_barang', 'harga', 'stock'
    ];
    public $timestamps = true;

}
