<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenisproduksi extends Model
{
    protected $table = 'jenisproduksi';
    protected $fillable = ['kbli','nama_produk',
        'kapasitas_produksi','satuan','nilai_produksi','id_industri'];
}
