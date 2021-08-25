<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenagaKerjaController extends Controller
{
    public function storeThp5(Request $request)
    {
        $cek_if_exist = \App\Tenagakerja::where('id_industri',$request->id_industri)->count();
        if($cek_if_exist > 0){
            $crud = \App\Tenagakerja::where('id_industri',$request->id_industri)
                ->update([
                    'n_pr' => $request->n_pr,
                    'n_lk' => $request->n_lk,
                    'n_asing' => $request->n_asing,
                    'id_industri' => $request->id_industri
                ]);
        }else{
            $crud = \App\Tenagakerja::create($request->all());
        }
        return response()->json('success');
    }
}
