<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        $kec = \App\Kecamatan::where('is_deleted','0')->get();
        return view('kecamatan.index',compact('kec'));
    }

    public function create()
    {
        $data = "tambah";
        return view('kecamatan.create',compact('data'));
    }

    public function edit($id)
    {
        $data = "edit";
        $kec = \App\Kecamatan::find($id);
        return view('kecamatan.create',compact(['data','kec']));
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            ['nama_kec' => 'required'],
            ['nama_kec.required' => 'Nama kecamatan harus diisi']
        );
        $simpan = \App\Kecamatan::create($request->all());
        return redirect('kecamatan')->with('success','Berhasil Menambahkan Data Kecamatan');
    }

    public function update(Request $request)
    {
        $this->validate(
            $request,
            ['nama_kec' => 'required'],
            ['nama_kec.required' => 'Nama kecamatan harus diisi']
        );
        $update = \App\Kecamatan::find($request->id);
        $update->nama_kec = $request->nama_kec;
        $update->save();
        return redirect('kecamatan')->with('success','Berhasil Mengubah Data Kecamatan');
    }

    public function destroy($id)
    {
        $delete = \App\Kecamatan::find($id);
        $delete->is_deleted = '1';
        $delete->save();
        return redirect('kecamatan')->with('success','Berhasil Menghapus Data Kecamatan');
    }
}
