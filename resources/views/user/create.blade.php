@extends('templates.main')
@section('title', 'Halaman Tambah User | Data Industri | Disperindag Kota Kediri')
@section('content')
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="page-header">
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kelola User</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->    
    <div class="card">
        <h5 class="card-header">@if($data == 'tambah')Tambah @else Edit @endif User</h5>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @if($data == 'tambah')
                     @php $url = url('user/store');  @endphp
                    @else
                     @php $url = url('user/update');  @endphp
                    @endif
                    <form method="POST" action="{{ $url }}">
                        @csrf
                        @if($data == 'edit')
                        <input type="hidden" name="id" value="{{ $user->id }}" />
                        @endif
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Username</label>
                            <input id="inputText3" name="username" 
                                type="text" class="form-control  @error('username') is-invalid @enderror"
                                value="@if($data == 'edit') {{ $user->username }}@endif" />
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}  
                             </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Email</label>
                            <input id="inputText3" name="email" 
                                type="email" class="form-control  @error('email') is-invalid @enderror"
                                value="@if($data == 'edit') {{ $user->email }}@endif" />
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}  
                             </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Password</label>
                            <input  name="password" 
                                type="text" class="form-control  @error('password') is-invalid @enderror"
                                @if($data == 'edit') placeholder="Kosongkan bila tidak ingin mengganti" @endif />
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}  
                             </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Password Hint</label>
                            <input id="remember_token" name="remember_token" 
                                type="text" class="form-control  @error('remember_token') is-invalid @enderror"
                                value="@if($data == 'edit') {{ $user->remember_token }}@endif" />
                            @error('remember_token')
                            <div class="invalid-feedback">
                                {{ $message }}  
                             </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tipe User</label>
                            <select name="tipe_akun" class="custom-select">
                                <option>Pilih salah satu</option>
                                <option @if($data == 'edit') @if($user->tipe_akun == 'adm') selected @endif @endif value="adm">Admin</option>
                                <option @if($data == 'edit') @if($user->tipe_akun == 'spv') selected @endif @endif value="spv">Superviosor</option>
                            </select>
                        </div><br />
                        <button type="submit" class="btn btn-rounded btn-primary btn-block mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection