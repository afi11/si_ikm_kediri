<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $user = \App\User::all();
        return view('user.index',compact('user'));
    }

    public function create()
    {
        $data = "tambah";
        return view('user.create',compact('data'));
    }

    public function edit($id)
    {
        $data = "edit";
        $user = \App\User::find($id);
        return view('user.create',compact('data','user'));
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            ['username' => 'required'],
            ['email' => 'required'],
            ['password' => 'required'],
            ['tipe_akun' => 'required'],
            ['remember_token' => 'required'],
            ['username.required' => 'Username harus diisi',
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
            'tipe_akun.required' => 'Tipe akun harus diisi',
            'remember_token.required'=> 'Password hint harus diisi']
        );
        $simpan = \App\User::create($request->except(['password']) + 
            ['password' => app('hash')->make($request->password)]);
        return redirect('user')->with('success','Berhasil Menambahkan Data User');
    }

    public function update(Request $request)
    {
        $this->validate(
            $request,
            ['username' => 'required'],
            ['email' => 'required'],
            ['tipe_akun' => 'required'],
            ['remember_token' => 'required'],
            ['username.required' => 'Username harus diisi',
            'email.required' => 'Email harus diisi',
            'tipe_akun.required' => 'Tipe akun harus diisi',
            'remember_token.required'=> 'Password hint harus diisi']
        );
        $user = \App\User::find($request->id);
        $user->username = $request->username;
        $user->email = $request->email;
        if($request->password != ""){
            $user->password = app('hash')->make($request->password);
        }
        $user->tipe_akun = $request->tipe_akun;
        $user->remember_token = $request->remember_token;
        $user->save();
        return redirect('user')->with('success','Berhasil Mengubah Data User');
    }

    public function destroy($id)
    {
        $user = \App\User::find($id);
        $user->delete();
        return redirect('user')->with('success','Berhasil Menghapus Data User');
    }
}
