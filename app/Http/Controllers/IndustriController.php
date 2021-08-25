<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelurahan;

class IndustriController extends Controller
{

    public function index()
    {
        $industri = \App\Industri::join('badanusaha','badanusaha.id','=','industri.bu_id')
            ->where('badanusaha.is_deleted','0')
            ->where('industri.is_deleted','0')->get();
        return view('industri.index',compact('industri'));
    }

    public function getKec(Request $request)
    {
        $search = $request->search;
  
        if($search == ''){
           $kec = \App\Kecamatan::orderby('nama_kec','asc')->select('id','nama_kec')->limit(5)->get();
        }else{
           $kec = \App\Kecamatan::orderby('nama_kec','asc')->select('id','nama_kec')->where('nama_kec', 'like', '%' .$search . '%')->limit(5)->get();
        }
  
        $response = array();
        foreach($kec as $data){
           $response[] = array("id"=>$data->id,"text"=>$data->nama_kec);
        }
  
        return response()->json($response);
    }

    public function getKel(Request $request, $id)
    {
        $search = $request->search;
  
        if($search == ''){
           $kec = Kelurahan::where('kec_id',$id)
                ->orderby('nama_kel','asc')->select('id','nama_kel')->get();
        }else{
           $kec = Kelurahan::where('kec_id',$id)
                ->orderby('nama_kel','asc')->select('id','nama_kel')->where('nama_kel', 'like', '%' .$search . '%')->get();
        }
  
        $response = array();
        foreach($kec as $data){
           $response[] = array("id"=>$data->id,"text"=>$data->nama_kel);
        }
  
        return response()->json($response);
    }

    public function create()
    {
        $bu = \App\Badanusaha::all();
        return view('industri.create',compact('bu',$bu));
    }

    public function edit($id)
    {
        $bu = \App\Badanusaha::all();
        $kec = \App\Kecamatan::all();
        $industri = \App\Industri::where('id_industri',$id)->first();
        $jenisproduksi = \App\Jenisproduksi::where('id_industri',$id)->first();
        $bhn_bk = \App\Bahanbaku::where('id_industri',$id)->first();
        $bhn_bkr = \App\Bahanbakar::where('id_industri',$id)->first();
        $naker = \App\Tenagakerja::where('id_industri',$id)->first();
        $pemasaran = \App\Pemasaran::where('id_industri',$id)->first();
        return view('industri.edit',compact(['industri','bu','kec','jenisproduksi','bhn_bk','bhn_bkr','naker','pemasaran']));
    }

    public function show($id)
    {
        $industri = \App\Industri::join('badanusaha','badanusaha.id','=','industri.bu_id')
            ->join('kecamatan','kecamatan.id','=','industri.kec_id')
            ->join('kelurahans','kelurahans.id','=','industri.kel_id')
            ->where('id_industri',$id)->first();
        $jenisproduksi = \App\Jenisproduksi::where('id_industri',$id)->first();
        $bhn_bk = \App\Bahanbaku::where('id_industri',$id)->first();
        $bhn_bkr = \App\Bahanbakar::where('id_industri',$id)->first();
        $naker = \App\Tenagakerja::where('id_industri',$id)->first();
        $pemasaran = \App\Pemasaran::where('id_industri',$id)->first();
        return view('industri.show',compact(['industri','jenisproduksi','bhn_bk','bhn_bkr','naker','pemasaran']));
    }

    public function storeThp1(Request $request)
    {
        $count = \App\Industri::count();
        $count = $count + 1;
        $id = "IND".$count;
        $st = true;
        do{
            $cek = \App\Industri::where('id_industri',$id)->count();
            if($cek < 1){
                $st = false;
            }else{
                $id_temp = substr($id, 3);
                $id_temp = $id_temp + 1;
                $id = "IND".$id_temp;
            }
        }while($st);
        $store = \App\Industri::create([
            'id_industri' => $id,
            'tipe_usaha' => $request->tipe_usaha,
            'pemilik' => $request->pemilik,
            'nama_perusahaan' => $request->nama_perusahaan,
            'bu_id' => $request->bu_id
        ]);
        return response()->json(['id_industri' => $id]);
    }

    public function ubahIndustri(Request $request)
    {
        $industri = \App\Industri::where('id_industri',$request->id_industri)
            ->update([
                'tipe_usaha' => $request->tipe_usaha,
                'pemilik' => $request->pemilik,
                'nama_perusahaan' => $request->nama_perusahaan,
                'bu_id' => $request->bu_id,
                'nilai_investasi' => $request->nilai_investasi
            ]);
        return response()->json('success');
    }

    public function storeThp2(Request $request)
    {
        $industri = \App\Industri::where('id_industri',$request->id_industri)
            ->update([
                'no_ijin' => $request->no_ijin,
                'tgl_ijin' => $request->tgl_ijin,
                'status_pm' => $request->status_pm,
                'klasifikasi' => $request->klasifikasi,
                'kec_id' => $request->kec_id,
                'kel_id' => $request->kel_id,
                'jalan' => $request->jalan,
                'telp_fax' => $request->telp_fax,
                'nilai_investasi' => $request->nilai_investasi
            ]);
        return response()->json('success');
    }

    public function destroy($id){
        $industri = \App\Industri::where('id_industri',$id)
            ->update(['is_deleted' => '1']);
        return redirect('industri')->with('success','Berhasil Menghapus Data Industri');
    }

    public function recover($id)
    {
        $delete = \App\Industri::where('id_industri',$id)
            ->update(['is_deleted' => '0']);
        return redirect('recover_data')->with('success','Berhasil Mengembalikan Data Industri');
    }

    public function permanent_delete($id)
    {
        $delete1 = \App\Industri::where('id_industri',$id)->delete();
        $delete2 = \App\Bahanbakar::where('id_industri',$id)->delete();
        $delete3 = \App\Bahanbaku::where('id_industri',$id)->delete();
        $delete4 = \App\Jenisproduksi::where('id_industri',$id)->delete();
        $delete5 = \App\Pemasaran::where('id_industri',$id)->delete();
        $delete6 = \App\Tenagakerja::where('id_industri',$id)->delete();
        return redirect('recover_data')->with('success','Berhasil Menghapus Data Industri');
    }
}
