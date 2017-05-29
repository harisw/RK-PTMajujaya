<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MQuotation extends Model
{

    protected $table = 'Quotation';
    protected $fillable = [
      'nama_perusahaan', 'nama_quotation'
    ];
    public $timestamps = true;

}
