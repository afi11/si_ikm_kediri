<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisProduksiController extends Controller
{
    public function storeThp3(Request $request)
    {
        $cek_if_exist = \App\jenisproduksi::where('id_industri',$request->id_industri)->count();
        if($cek_if_exist > 0){
            $crud = \App\Jenisproduksi::where('id_industri',$request->id_industri)
                ->update([
                    'kbli' => $request->kbli,
                    'nama_produk' => $request->nama_produk,
                    'kapasitas_produksi' => $request->kapasitas_produksi,
                    'satuan' => $request->satuan,
                    'nilai_produksi' => $request->nilai_produksi
                ]);
        }else{
            $crud = \App\Jenisproduksi::create($request->all());
        }
        return response()->json('success');
    }
}
