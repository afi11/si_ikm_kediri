<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Exports\IndustriExports;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        $data = \App\Industri::join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
            ->join('kelurahans','kelurahans.id','=','industri.kel_id')
            ->join('tenagakerja','tenagakerja.id_industri','=','industri.id_industri')
            ->join('badanusaha','badanusaha.id','=','industri.bu_id')
            ->join('bahanbaku','bahanbaku.id_industri','=','industri.id_industri')
            ->join('kecamatan','kecamatan.id','=','industri.kec_id')
            ->where('industri.is_deleted','0')
            ->get();
        $kec = \App\Kecamatan::all();
        return view('dashboard.index',compact('data','kec'));
    }

    public function sorting(Request $request)
    {
        $produk = $request->produk;
        $kecamatan = $request->kecamatan;
        $kelurahan = $request->kelurahan;
        if($produk != "" && $kecamatan != "" &&  $kelurahan != ""){
            $data = \App\Industri::join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
                ->join('badanusaha','badanusaha.id','=','industri.bu_id')
                ->join('bahanbaku','bahanbaku.id_industri','=','industri.id_industri')
                ->join('tenagakerja','tenagakerja.id_industri','=','industri.id_industri')
                ->join('kecamatan','kecamatan.id','=','industri.kec_id')
                ->join('kelurahans','kelurahans.id','=','industri.kel_id')
                ->where('industri.is_deleted','0')
                ->where('jenisproduksi.nama_produk',$produk)
                ->where('industri.kel_id',$kelurahan)
                ->where('industri.kec_id',$kecamatan)
                ->get();
            $kec = \App\Kecamatan::all();
            return view('dashboard.sorting',compact('data','kec','produk','kelurahan','kecamatan'));
        }
        if($kecamatan == "" && $kelurahan == ""){
            $data = \App\Industri::join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
                ->join('badanusaha','badanusaha.id','=','industri.bu_id')
                ->join('bahanbaku','bahanbaku.id_industri','=','industri.id_industri')
                ->join('tenagakerja','tenagakerja.id_industri','=','industri.id_industri')
                ->join('kecamatan','kecamatan.id','=','industri.kec_id')
                ->join('kelurahans','kelurahans.id','=','industri.kel_id')
                ->where('industri.is_deleted','0')
                ->where('jenisproduksi.nama_produk',$produk)
                ->get();
            $kec = \App\Kecamatan::all();
            return view('dashboard.sorting',compact('data','kec','produk','kelurahan','kecamatan'));
        }
        if($produk == "" && $kelurahan == ""){
            $data = \App\Industri::join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
                ->join('badanusaha','badanusaha.id','=','industri.bu_id')
                ->join('bahanbaku','bahanbaku.id_industri','=','industri.id_industri')
                ->join('tenagakerja','tenagakerja.id_industri','=','industri.id_industri')
                ->join('kecamatan','kecamatan.id','=','industri.kec_id')
                ->join('kelurahans','kelurahans.id','=','industri.kel_id')
                ->where('industri.is_deleted','0')
                ->where('industri.kec_id',$kecamatan)
                ->get();
            $kec = \App\Kecamatan::all();
            return view('dashboard.sorting',compact('data','kec','produk','kelurahan','kecamatan'));
        }
        if($produk == ""){
            $data = \App\Industri::join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
                ->join('badanusaha','badanusaha.id','=','industri.bu_id')
                ->join('bahanbaku','bahanbaku.id_industri','=','industri.id_industri')
                ->join('tenagakerja','tenagakerja.id_industri','=','industri.id_industri')
                ->join('kecamatan','kecamatan.id','=','industri.kec_id')
                ->join('kelurahans','kelurahans.id','=','industri.kel_id')
                ->where('industri.is_deleted','0')
                ->where('industri.kel_id',$kelurahan)
                ->where('industri.kec_id',$kecamatan)
                ->get();
            $kec = \App\Kecamatan::all();
            return view('dashboard.sorting',compact('data','kec','produk','kelurahan','kecamatan'));
        }
    }

    public function export_excel(Request $request)
    {
        $produk = $request->produk;
        $kecamatan = $request->kecamatan;
        $kelurahan = $request->kelurahan;
        return Excel::download(new IndustriExports($produk,$kecamatan,$kelurahan), 'industri.xlsx');
    }

}
