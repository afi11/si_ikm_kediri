@extends('templates.main')
@section('title', 'Halaman Edit Data Industri | Data Industri | Disperindag Kota Kediri')
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
        <h5 class="card-header">Kelola Industri</h5>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="pills-regular">
                        <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#pills-thp1" role="tab">Identitas Umum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-thp2" role="tab">Identitas Industri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-thp3" role="tab">Produksi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-thp4" role="tab">Bahan Baku</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-thp7" role="tab">Bahan Bakar (BBM)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-thp8" role="tab">Bahan Bakar (Listrik)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-thp9" role="tab">Bahan Bakar (Gas LPG)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-thp10" role="tab">Bahan Bakar (Air)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-thp5" role="tab">Tenaga Kerja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-thp6" role="tab">Pemasaran</a>
                            </li>
                        </ul>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-thp1" role="tabpanel">
                                       @include('industri.itemcruds.crud_thp1')
                                    </div>
                                    <div class="tab-pane fade" id="pills-thp2" role="tabpanel">
                                       @include('industri.itemcruds.crud_thp2')
                                    </div>
                                    <div class="tab-pane fade" id="pills-thp3" role="tabpanel">
                                      @include('industri.itemcruds.crud_thp3')
                                    </div>
                                    <div class="tab-pane fade" id="pills-thp4" role="tabpanel">
                                      @include('industri.itemcruds.crud_thp4')
                                    </div>
                                    <div class="tab-pane fade" id="pills-thp7" role="tabpanel">
                                        @include('industri.itemcruds.crud_thp7')
                                    </div>
                                    <div class="tab-pane fade" id="pills-thp8" role="tabpanel">
                                        @include('industri.itemcruds.crud_thp8')
                                    </div>
                                    <div class="tab-pane fade" id="pills-thp9" role="tabpanel">
                                        @include('industri.itemcruds.crud_thp9')
                                    </div>
                                    <div class="tab-pane fade" id="pills-thp10" role="tabpanel">
                                        @include('industri.itemcruds.crud_thp10')
                                    </div>
                                    <div class="tab-pane fade" id="pills-thp5" role="tabpanel">
                                      @include('industri.itemcruds.crud_thp5')
                                    </div>
                                    <div class="tab-pane fade" id="pills-thp6" role="tabpanel">
                                      @include('industri.itemcruds.crud_thp6')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection