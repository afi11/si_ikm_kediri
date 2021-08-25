<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BadanUsahaController extends Controller
{
    public function index()
    {
        $bu = \App\Badanusaha::where('is_deleted','0')->get();
        return view('badan_usaha.index',compact('bu'));
    }

    public function create()
    {
        $data = "tambah";
        return view('badan_usaha.create',compact('data'));
    }

    public function edit($id)
    {
        $data = "edit";
        $bu = \App\Badanusaha::find($id);
        return view('badan_usaha.create',compact(['data','bu']));
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            ['nama_badan_usaha' => 'required'],
            ['nama_badan_usaha.required' => 'Nama badan harus diisi']
        );
        $simpan = \App\Badanusaha::create($request->all());
        return redirect('badan_usaha')->with('success','Berhasil Menambahkan Data Badan Usaha');
    }

    public function update(Request $request)
    {
        $this->validate(
            $request,
            ['nama_badan_usaha' => 'required'],
            ['nama_badan_usaha.required' => 'Nama badan harus diisi']
        );
        $update = \App\Badanusaha::find($request->id);
        $update->nama_badan_usaha = $request->nama_badan_usaha;
        $update->save();
        return redirect('badan_usaha')->with('success','Berhasil Mengubah Data Badan Usaha');
    }

    public function destroy($id)
    {
        $delete = \App\Badanusaha::find($id);
        $delete->is_deleted = '1';
        $delete->save();
        return redirect('badan_usaha')->with('success','Berhasil Menghapus Data Badan Usaha');
    }

    public function recover($id)
    {
        $delete = \App\Badanusaha::find($id);
        $delete->is_deleted = '0';
        $delete->save();
        return redirect('recover_data')->with('success','Berhasil Mengembalikan Data Badan Usaha');
    }

    public function permanent_delete($id)
    {
        $delete = \App\badanusaha::find($id);
        $delete->delete();
        return redirect('recover_data')->with('success','Berhasil Menghapus Data Badan Usaha');
    }
}
