<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenagakerja extends Model
{
    protected $table = 'tenagakerja';
    protected $fillable = ['n_pr','n_lk','n_asing','id_industri'];
}
