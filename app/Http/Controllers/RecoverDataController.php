<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecoverDataController extends Controller
{
    public function index()
    {
        $bu = \App\Badanusaha::where('is_deleted','1')->get();
        $industri = \App\Industri::
            join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
            ->where('is_deleted','1')->get();
        return view('recover.index',compact(['bu','industri']));
    }
}
