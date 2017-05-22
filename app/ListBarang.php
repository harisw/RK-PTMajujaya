<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListBarang extends Model 
{

    protected $table = 'ListBarang';
    public $timestamps = true;

    public function Barang()
    {
        return $this->hasMany('MItems', 'barang_id');
    }

    public function Quotation()
    {
        return $this->hasMany('MQuotation', 'quotation_id');
    }

}