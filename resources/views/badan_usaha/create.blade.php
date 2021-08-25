@extends('templates.main')
@section('title', 'Halaman Tambah / Edit Badan Usaha | Data Industri | Disperindag Kota Kediri')
@section('content')
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="page-header">
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Badan Usaha</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->    
    <div class="card">
        <h5 class="card-header">@if($data == 'tambah')Tambah @else Edit @endif Badan Usaha</h5>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @if($data == 'tambah')
                     @php $url = url('badan_usaha/store');  @endphp
                    @else
                     @php $url = url('badan_usaha/update');  @endphp
                    @endif
                    <form method="POST" action="{{ $url }}">
                        @csrf
                        @if($data == 'edit')
                        <input type="hidden" name="id" value="{{ $bu->id }}" />
                        @endif
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Nama Badan Usaha</label>
                            <input id="inputText3" name="nama_badan_usaha" 
                                type="text" class="form-control  @error('nama_badan_usaha') is-invalid @enderror" placeholder="PT/CV/UD"
                                value="@if($data == 'edit') {{ $bu->nama_badan_usaha }}@endif" />
                            @error('nama_badan_usaha')
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