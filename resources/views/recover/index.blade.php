@extends('templates.main')
@section('title', 'Halaman Recovery Data | Data Industri | Disperindag Kota Kediri')
@section('content')
<div class="page-header">
    <h2 class="pageheader-title">Recover Data</h2>
    <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Recover Data</li>
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
        <div class="pills-regular">
            <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#rec_1" role="tab">Badan Usaha</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#rec_3" role="tab">Industri</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="rec_1" role="tabpanel">
                   @include('recover.rec_badan_usaha')
                </div>
                <div class="tab-pane fade" id="rec_3" role="tabpanel">
                    @include('recover.rec_industri')
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection