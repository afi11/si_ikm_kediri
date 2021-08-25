@extends('templates.main')
@section('title', 'Halaman Tambah Data Industri | Data Industri | Disperindag Kota Kediri')
@section('content')
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="page-header">
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kelola Industri</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== --> 
    <div class="card">
        <h5 class="card-header">Tambah Industri</h5>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-6">
                        <form id="frmThp1">
                            @csrf
                            <div class="form-group">
                                <label for="tipe_usaha" class="col-form-label">Tipe Industri</label>
                                <select class="custom-select" name="tipe_usaha" id="tipe_usaha">
                                    <option>-- Pilih Salah Satu --</option>
                                    <option value="kcl">Industri Kecil</option>
                                    <option value="mngh">Industri Menengah</option>
                                    <option value="bsr">Industri Besar</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="badan_usaha" class="col-form-label">Badan Usaha</label>
                                <select class="custom-select" name="bu_id" id="bu_id">
                                    <option>-- Pilih Salah Satu --</option>
                                    @foreach ($bu as $data)                 
                                        <option value="{{ $data->id }}">{{ $data->nama_badan_usaha }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_pemilik" class="col-form-label">Pemilik Industri</label>
                                <input type="text" name="pemilik" id="pemilik" class="form-control" />
                            <div class="form-group">
                                <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
                                <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" />
                            </div>
                            <button type="button" id="simpanIndustri" class="btn btn-rounded btn-primary btn-block mt-5">Simpan</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection