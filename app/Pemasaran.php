<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasaran extends Model
{
    protected $table = 'pemasaran';
    protected $fillable = ['lokal','regional','nasional','ekspor','id_industri'];
}
