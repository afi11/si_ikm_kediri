<?php

function countItem($id_kec)
{
    $count = \App\industri::where('kec_id',$id_kec)->count();
    return $count;
}

function countBsrKcl($id_kec,$tipe)
{
    $count = \App\industri::where('kec_id',$id_kec)->where('tipe_usaha',$tipe)->count();
    return $count;
}