@extends('templates.main')
@section('title', 'Halaman Kelola Data User | Data Industri | Disperindag Kota Kediri')
@section('content')
    <div class="page-header">
        <h2 class="pageheader-title">Data User</h2>
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </nav>
        </div>
    </div> 
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
            <a class="btn btn-rounded btn-primary btn-sm mb-3" href="{{ url('user/tambah') }}">Tambah Data</a>
            <div class="table-responsive">
                <table id="dataMaster" class="table table-striped table-bordered first">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password Hint</th>
                            <th>Tipe Akun</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=0; @endphp
                        @foreach ($user as $data) @php $no++; @endphp              
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $data->username }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->remember_token }}</td>
                                <td>{{ ($data->tipe_akun == 'adm' ? 'Admin' : 'Supervisor' ) }}</td>
                                <td>
                                    <a href="{{ url('user/edit/'.$data->id) }}" class="btn-sm text-white btn btn-rounded btn-primary"><i class="fas fa-edit"></i></a>
                                    @if(Auth::user()->id != $data->id)
                                        <a data-toggle="modal" data-target="#exampleModal{{$data->id}}" class="btn-sm text-white btn btn-rounded btn-danger"><i class="fas fa-trash"></i></a>
                                    @endif
                                </td>
                            </tr>
                            {{-- Modal to delete --}}
                            <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data {{ $data->nama }}</h5>
                                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda ingin menghapus data ini?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="user/delete/{{ $data->id }}" class="btn btn-secondary">Hapus</a>
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