<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    public function storeThp4(Request $request)
    {
        $cek_if_exist = \App\Bahanbaku::where('id_industri',$request->id_industri)->count();
        if($cek_if_exist > 0){
            $crud = \App\Bahanbaku::where('id_industri',$request->id_industri)
                ->update([
                    'jenis' => $request->jenis,
                    'volume' => $request->volume,
                    'nilai_bb_bp' => $request->nilai_bb_bp,
                    'asal_bb' => $request->asal_bb,
                    'id_industri' => $request->id_industri,
                    'satuan_bhn_bk' => $request->satuan_bhn_bk
                ]);
        }else{
            $crud = \App\Bahanbaku::create($request->all());
        }
        return response()->json('success');
    }
}
