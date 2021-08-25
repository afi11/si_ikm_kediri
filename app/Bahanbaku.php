<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahanbaku extends Model
{
    protected $table = 'bahanbaku';
    protected $fillable = [
        'jenis',
        'volume',
        'nilai_bb_bp',
        'asal_bb',
        'id_industri',
        'satuan_bhn_bk'
    ];
}
