@extends('templates.main')
@section('title', 'Halaman Kelola Data Industri | Data Industri | Disperindag Kota Kediri')
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
        <h5 class="card-header">Daftar Data</h5>
        <div class="card-body">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>
            @endif
            <a class="btn btn-rounded btn-primary btn-sm mb-3" href="{{ url('industri/tambah') }}">Tambah Data</a>
            <div class="table-responsive">
                <table id="dataMaster" class="table table-striped table-bordered first">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Industri</th>
                            <th>Pemilik</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 0; @endphp
                        @foreach ($industri as $data) @php $no++; @endphp
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $data->nama_perusahaan }}</td>
                                <td>{{ $data->pemilik }}</td>
                                <td>
                                    <a href="{{ url('industri/show/'.$data->id_industri) }}" class="btn btn-info btn-sm btn-rounded">Detil</a>
                                    <a href="{{ url('industri/edit/'.$data->id_industri) }}" class="btn btn-primary btn-sm btn-rounded"><i class="fas fa-edit"></i></a>
                                    <button data-toggle="modal" data-target="#exampleModal{{$data->id_industri}}" class="btn btn-danger btn-sm btn-rounded"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                             {{-- Modal to delete --}}
                             <div class="modal fade" id="exampleModal{{$data->id_industri}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data {{ $data->nama_perusahaan }}</h5>
                                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </a>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda ingin menghapus data ini?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="industri/delete/{{ $data->id_industri }}" class="btn btn-secondary">Hapus</a>
                                            <a href="#" class="btn btn-primary" data-dismiss="modal">Tidak</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection