@extends('templates.main')
@section('title', 'Halaman Dashboard | Data Industri | Disperindag Kota Kediri')
@section('content')
    @if(Session::has('err_access'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ Session::get('err_access') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
      </div>
    @endif
    <p>Jumlah Data</p>
    <div class="row">
        @foreach ($kec as $item)            
            <div class="col-md-4">
                <div class="card card-body">
                    <div>
                        <h2 class="d-inline">{{ $item->nama_kec }}</h2> 
                        <h2 style="float: right;" class="d-inline ml-auto text-right text-success">{{ countItem($item->id) }}</h2>
                    </div>
                    <div>
                        <h5 class="d-inline">Industri Besar</h5>
                        <h5 style="float: right;" class="d-inline ml-auto text-right text-success">{{ countBsrKcl($item->id,'bsr') }}</h5>
                    </div>
                    <div style="margin-top: -20px;">
                        <h5 class="d-inline">Industri Menengah</h5>
                        <h5 style="float: right;" class="d-inline ml-auto text-right text-success">{{ countBsrKcl($item->id,'mngh') }}</h5>
                    </div>
                    <div style="margin-top: -20px; margin-bottom: -20px;">
                        <h5 class="d-inline">Industri Kecil</h5>
                        <h5 style="float: right;" class="d-inline ml-auto text-right text-success">{{ countBsrKcl($item->id,'kcl') }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="card card-body">
        <h5 class="mb-0">Filter Data</h5>
        <span class="mb-3">Isikan beberapa form atau salah satu form, pada form kelurahan form kecamatan harus dipilih terlebih dahulu.</span>
        <form class="mb-3" action="{{ url('sorting/industri') }}" method="GET">
            <div class="row">
                <div class="col-3">
                    <input type="text" name="produk" class="form-control mr-3" placeholder="Nama Produk" />
                </div>
                <div class="col-3">
                    <select class="custom-select" name="kecamatan" id="kec_id">
                        <option value="">Pilih salah satu kecamatan</option>
                        @foreach ($kec as $item)         
                          <option value="{{ $item->id }}">{{ $item->nama_kec }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <select class="custom-select select2_kel" name="kelurahan"></select>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="fas fa-search"></i> Filter
                    </button>
                </div>
            </div>
        </form>
        <hr />
        <div class="col-2 mb-2">
            <div class="row">
                <a class="btn btn-primary btn-sm" href="{{ url('export_excel_ind') }}">Export Excel</a>
            </div>
        </div>
        <div style="overflow: auto;">       
            <table class="table table-striped table-bordered" id="dataMaster">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Jenis Industri</th>
                        <th>Nama Produk</th>
                        <th>Pemilik</th>
                        <th>Jalan</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Status PM</th>
                        <th>Klasifikasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @php 
                    $no = 0; 
                    $nilai_invest = 0; 
                    $kapasitas_produksi = 0;
                    $nilai_produksi = 0; 
                    $volume_bahan_baku = 0;
                    $nilai_bb_bp = 0;
                    $n_naker = 0;
                @endphp
                @foreach ($data as $item) 
                    @php $no++; @endphp
                    @php $nilinvest = str_replace(',','',$item->nilai_investasi); @endphp
                    @php $kapasprod = str_replace(',','',$item->kapasitas_produksi); @endphp
                    @php $nilaiprod = str_replace(',','',$item->nilai_produksi); @endphp
                    @php $volumebhnbk = str_replace(',','',$item->volume); @endphp 
                    @php $nil_bb_bp = str_replace(',','',$item->nilai_bb_bp); @endphp  
                    @php 
                        $nilai_invest = $nilinvest + $nilai_invest; 
                        $kapasitas_produksi = $kapasitas_produksi + $kapasprod;
                        $nilai_produksi = $nilai_produksi + $nilaiprod;
                        $volume_bahan_baku = $volume_bahan_baku + $volumebhnbk;
                        $nilai_bb_bp = $nilai_bb_bp + $nil_bb_bp;
                        $n_naker = $n_naker + ($item->n_pr + $item->n_lk + $item->n_asing);
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $item->nama_badan_usaha.' '.$item->nama_perusahaan }}</td>
                        <td>
                            @if($item->tipe_usaha == "kcl")
                                Kecil
                            @elseif($item->tipe_usaha == "mngh")
                                Menengah
                            @else 
                                Besar 
                            @endif
                        </td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->pemilik }}</td>
                        <td>{{ 'Jl.'.$item->jalan}}</td>
                        <td>{{ $item->nama_kel }}</td>
                        <td>{{ $item->nama_kec }}</td>
                        <td>{{ $item->status_pm }}</td>
                        <td>{{ $item->klasifikasi }}</td>
                        <td>
                            <a href="{{ url('industri/show/'.$item->id_industri) }}" class="btn btn-info btn-sm btn-rounded">Detil</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table> 
        </div>
        <hr />
        <h4>Perhitungan Data</h4>
        <table class="table table-striped table-bordered">
            <tr>
                <th>Jumlah Tenaga Kerja</th>
                <td>{{ $n_naker }}</td>
            </tr>
            <tr>
                <th>Jumlah Nilai Investasi</th>
                <td>{{ ThousandSeparator($nilai_invest) }}</td>
            </tr>
            <tr>
                <th>Jumlah Kapasitas Produksi</th>
                <td>{{ ThousandSeparator($kapasitas_produksi) }}</td>
            </tr>
            <tr>
                <th>Jumlah Nilai Produksi</th>
                <td>{{ ThousandSeparator($nilai_produksi) }}</td>
            </tr>
            <tr>
                <th>Jumlah Volume Bahan Baku</th>
                <td>{{ ThousandSeparator($volume_bahan_baku) }}</td>
            </tr>
            <tr>
                <th>Jumlah Nilai BB / BP</th>
                <td>{{ ThousandSeparator($nilai_bb_bp) }}</td>
            </tr>
        </table>
    </div>
    <script> value_kec = ""; </script>
@endsection