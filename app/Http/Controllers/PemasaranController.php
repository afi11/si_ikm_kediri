<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemasaranController extends Controller
{
    public function storeThp6(Request $request)
    {
        $cek_if_exist = \App\Pemasaran::where('id_industri',$request->id_industri)->count();
        if($cek_if_exist > 0){
            $crud = \App\Pemasaran::where('id_industri',$request->id_industri)
                ->update([
                    'lokal' => $request->lokal,
                    'regional' => $request->regional,
                    'nasional' => $request->nasional,
                    'ekspor' => $request->ekspor,
                    'id_industri' => $request->id_industri
                ]);
        }else{
            $crud = \App\Pemasaran::create($request->all());
        }
        return response()->json('success');
    }
}
