<?php

function getNamaKelurahan($idkelurahan)
{
    $data = \App\kelurahan::where('id',$idkelurahan)->first();
    return $data->nama_kel;
}