<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahanbakar extends Model
{
    protected $table = 'bahanbakar';
    protected $fillable = ['jenis_bbm','volume_bbm','satuan_bbm',
        'jenis_listrik','volume_listrik','satuan_listrik',
        'jenis_gas','volume_gas','satuan_gas',
        'jenis_air','volume_air','satuan_air',
        'id_industri'];
}
