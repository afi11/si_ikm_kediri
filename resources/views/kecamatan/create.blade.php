@extends('templates.main')
@section('title', 'Halaman Tambah Data Kecamatan | Data Industri | Disperindag Kota Kediri')
@section('content')
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="page-header">
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kelola Kecamatan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->    
    <div class="card">
        <h5 class="card-header">@if($data == 'tambah')Tambah @else Edit @endif Kecamatan</h5>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @if($data == 'tambah')
                     @php $url = url('kecamatan/store');  @endphp
                    @else
                     @php $url = url('kecamatan/update');  @endphp
                    @endif
                    <form method="POST" action="{{ $url }}">
                        @csrf
                        @if($data == 'edit')
                        <input type="hidden" name="id" value="{{ $kec->id }}" />
                        @endif
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Nama</label>
                            <input id="inputText3" name="nama_kec" 
                                type="text" class="form-control  @error('nama_kec') is-invalid @enderror" placeholder="Mojoroto/Kota/Pesantren"
                                value="@if($data == 'edit') {{ $kec->nama_kec }}@endif" />
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}  
                             </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-rounded btn-primary btn-block mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection