<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = DB::table('industri')
                ->join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
                ->join('badanusaha','badanusaha.id','=','industri.bu_id')
                ->join('kelurahans','kelurahans.id','=','industri.kel_id')
                ->join('kecamatan','kecamatan.id','=','industri.kec_id')
                ->where('industri.is_deleted','0')
                ->select(DB::raw("CONCAT(badanusaha.nama_badan_usaha,' ',industri.nama_perusahaan) AS nama_perusahaan"),
                    'jenisproduksi.nama_produk AS nama_produk','industri.pemilik as pemilik','industri.status_pm as status_pm','industri.klasifikasi as klasifikasi',
                    DB::raw("CONCAT('Jl.',industri.jalan) AS jalan"),'kelurahans.nama_kel as kelurahan', 'kecamatan.nama_kec as kecamatan')
                ->get();
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->filter(function ($instance) use ($request){
                    if(!empty($request->get('nama_produk'))){
                        $instance->collection = $instance->collection->filter(function ($row) use ($request){
                            if(Str::contains(Str::lower($row['nama_produk']), Str::lower($request->get('nama_produk')))){
                                return true;
                            }else if(Str::contains(Str::lower($row['nama_perusahaan']), Str::lower($request->get('nama_produk')))){
                                return true;
                            }
                            return false;
                        });
                    }
                })->make(true); 
        }  
        return view('home.index');
    }
}
