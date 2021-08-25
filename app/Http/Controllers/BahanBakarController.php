<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BahanBakarController extends Controller
{
    public function storeThp7(Request $request)
    {
        $mode = $request->tipe;
        $cek_if_exist = \App\Bahanbakar::where('id_industri',$request->id_industri)->count();
        if($cek_if_exist > 0){
            if($mode == "bbm"){
                $crud = \App\Bahanbakar::where('id_industri',$request->id_industri)
                    ->update([
                        'jenis_bbm' => $request->jenis_bbm,
                        'volume_bbm' => $request->volume_bbm,
                        'satuan_bbm' => $request->satuan_bbm,
                        'id_industri' => $request->id_industri
                    ]);
            }else if($mode == "listrik"){
                $crud = \App\Bahanbakar::where('id_industri',$request->id_industri)
                    ->update([
                        'jenis_listrik' => $request->jenis_listrik,
                        'volume_listrik' => $request->volume_listrik,
                        'satuan_listrik' => $request->satuan_listrik,
                        'id_industri' => $request->id_industri
                    ]);
            }else if($mode == "gas"){
                $crud = \App\Bahanbakar::where('id_industri',$request->id_industri)
                    ->update([
                        'jenis_gas' => $request->jenis_gas,
                        'volume_gas' => $request->volume_gas,
                        'satuan_gas' => $request->satuan_gas,
                        'id_industri' => $request->id_industri
                    ]);
            }else if($mode == "air"){
                $crud = \App\Bahanbakar::where('id_industri',$request->id_industri)
                    ->update([
                        'jenis_air' => $request->jenis_air,
                        'volume_air' => $request->volume_air,
                        'satuan_air' => $request->satuan_air,
                        'id_industri' => $request->id_industri
                    ]);
            }
        }else{
            if($mode == "bbm"){
                $crud = \App\Bahanbakar::create([
                    'jenis_bbm' => $request->jenis_bbm,
                    'volume_bbm' => $request->volume_bbm,
                    'satuan_bbm' => $request->satuan_bbm,
                    'id_industri' => $request->id_industri
                ]);
            }else if($mode == "listrik"){
                $crud = \App\Bahanbakar::create([
                    'jenis_listrik' => $request->jenis_listrik,
                    'volume_listrik' => $request->volume_listrik,
                    'satuan_listrik' => $request->satuan_listrik,
                    'id_industri' => $request->id_industri
                ]);
            }else if($mode == "gas"){
                $crud = \App\Bahanbakar::create([
                    'jenis_gas' => $request->jenis_gas,
                    'volume_gas' => $request->volume_gas,
                    'satuan_gas' => $request->satuan_gas,
                    'id_industri' => $request->id_industri
                ]);
            }else if($mode == "air"){
                $crud = \App\Bahanbakar::create([
                    'jenis_air' => $request->jenis_air,
                    'volume_air' => $request->volume_air,
                    'satuan_air' => $request->satuan_air,
                    'id_industri' => $request->id_industri
                ]);
            }
        }
        return response()->json('success');
    }
}
