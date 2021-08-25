<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    protected $table = 'industri';
    protected $fillable = ['id_industri','tipe_usaha','pemilik','nama_perusahaan','no_ijin','tgl_ijin',
        'status_pm','klasifikasi','jalan','kel','telp_fax','kec_id','bu_id','pemilik_id','is_deleted','nilai_investasi'];
}
