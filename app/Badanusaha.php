<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badanusaha extends Model
{
    protected $table = 'badanusaha';
    protected $fillable = ['nama_badan_usaha','is_deleted'];
}
