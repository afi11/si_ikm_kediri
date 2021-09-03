@extends('templates.main')
@section('title', 'Halaman Detil Data Industri | Data Industri | Disperindag Kota Kediri')
@section('content')
<div class="page-header">
    <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detil Industri {{ $industri->nama_badan_usaha }} {{ $industri->nama_perusahaan }}</li>
            </ol>
        </nav>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Detil Data</h5>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Badan Usaha</th>
                <td>{{ $industri->nama_badan_usaha }}</td>
            </tr>
            <tr>
                <th>Jenis Perusahaan</th>
                <td>
                    @if($industri->tipe_usaha == "kcl")
                        Kecil
                    @elseif($industri->tipe_usaha == "mngh")
                        Menengah
                    @else 
                        Besar 
                    @endif
                </td>
            </tr>
            <tr>
                <th>Nama Perusahaan</th>
                <td>{{ $industri->nama_perusahaan }}</td>
            </tr>
            <tr>
                <th>Nama Pemilik</th>
                <td>{{ $industri->pemilik }}</td>
            </tr>
            <tr>
                <th>Nomor Ijin</th>
                <td>{{ $industri->no_ijin }}</td>
            </tr>
            <tr>
                <th>Tanggal Ijin</th>
                <td>{{ $industri->tgl_ijin }}</td>
            </tr>
            <tr>
                <th>Status PM</th>
                <td>{{ $industri->status_pm }}</td>
            </tr>
            <tr>
                <th>Klasifikasi</th>
                <td>{{ $industri->klasifikasi }}</td>
            </tr>
            <tr>
                <th colspan="2">
                    <span class="text-primary">Alamat</span>
                </th>
            </tr>
            <tr>
                <th>Jalan</th>
                <td>{{ $industri->jalan }}</td>
            </tr>
            <tr>
                <th>Desa / Kel</th>
                <td>{{ $industri->nama_kel }}</td>
            </tr>
            <tr>
                <th>Kecamatan</th>
                <td>{{ $industri->nama_kec }}</td>
            </tr>
            <tr>
                <th>Telp / Fax</th>
                <td>{{ $industri->telp_fax }}</td>
            </tr>
            <tr>
                <th colspan="2">
                    <span class="text-primary">Tenaga Kerja</span>
                </th>
            </tr>
            <tr>
                <th>Jumlah Pria</th>
                <td>{{ $naker->n_lk }}</td>
            </tr>
            <tr>
                <th>Jumlah Wanita</th>
                <td>{{ $naker->n_pr }}</td>
            </tr>
            <tr>
                <th>Tenaga Kerja Asing</th>
                <td>{{ $naker->n_asing }}</td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td>{{ $naker->n_lk + $naker->n_pr + $naker->n_asing }}</td>
            </tr>
            <tr>
                <th colspan="2">
                    <span class="text-primary">Jenis Produksi</span>
                </th>
            </tr>
            <tr>
                <th>KBLI</th>
                <td>{{ $jenisproduksi->kbli }}</td>
            </tr>
            <tr>
                <th>Nama Produk</th>
                <td>{{ $jenisproduksi->nama_produk  }}</td>
            </tr>
            <tr>
                <th>Kapasitas Produksi</th>
                <td>{{ $jenisproduksi->kapasitas_produksi }}</td>
            </tr>
            <tr>
                <th>Satuan</th>
                <td>{{ $jenisproduksi->satuan }}</td>
            </tr>
            <tr>
                <th>Nilai Produksi</th>
                <td>{{ $jenisproduksi->nilai_produksi }}</td>
            </tr>
            <tr>
                <th colspan="2">
                    <span class="text-primary">Bahan Baku</span>
                </th>
            </tr>
            <tr>
                <th>Jenis</th>
                <td>{{ $bhn_bk->jenis }}</td>
            </tr>
            <tr>
                <th>Volume Terpakai</th>
                <td>{{ $bhn_bk->volume }}</td>
            </tr>
            <tr>
                <th>Satuan</th>
                <td>{{ $bhn_bk->satuan_bhn_bk  }}</td>
            </tr>
            <tr>
                <th>Nilai BB/BP</th>
                <td>{{ $bhn_bk->nilai_bb_bp }}</td>
            </tr>
            <tr>
                <th>Asal BB</th>
                <td>{{ $bhn_bk->asal_bb }}</td>
            </tr>
            <tr>
                <th colspan="2">
                    <span class="text-primary">Bahan Bakar BBM</span>
                </th>
            </tr>
            <tr>
                <th>Jenis</th>
                <td>{{ $bhn_bkr->jenis_bbm }}</td>
            </tr>
            <tr>
                <th>Volume</th>
                <td>{{ $bhn_bkr->volume_bbm }}</td>
            </tr>
            <tr>
                <th>Satuan</th>
                <td>{{ $bhn_bkr->satuan_bbm  }}</td>
            </tr>
            <tr>
                <th colspan="2">
                    <span class="text-primary">Bahan Bakar Listrik</span>
                </th>
            </tr>
            <tr>
                <th>Jenis</th>
                <td>{{ $bhn_bkr->jenis_listrik }}</td>
            </tr>
            <tr>
                <th>Volume</th>
                <td>{{ $bhn_bkr->volume_listrik }}</td>
            </tr>
            <tr>
                <th>Satuan</th>
                <td>{{ $bhn_bkr->satuan_listrik  }}</td>
            </tr>
            <tr>
                <th colspan="2">
                    <span class="text-primary">Bahan Bakar Gas</span>
                </th>
            </tr>
            <tr>
                <th>Jenis</th>
                <td>{{ $bhn_bkr->jenis_gas }}</td>
            </tr>
            <tr>
                <th>Volume</th>
                <td>{{ $bhn_bkr->volume_gas }}</td>
            </tr>
            <tr>
                <th>Satuan</th>
                <td>{{ $bhn_bkr->satuan_gas  }}</td>
            </tr>
            <tr>
                <th colspan="2">
                    <span class="text-primary">Bahan Bakar Air</span>
                </th>
            </tr>
            <tr>
                <th>Jenis</th>
                <td>{{ $bhn_bkr->jenis_air }}</td>
            </tr>
            <tr>
                <th>Volume</th>
                <td>{{ $bhn_bkr->volume_air }}</td>
            </tr>
            <tr>
                <th>Satuan</th>
                <td>{{ $bhn_bkr->satuan_air  }}</td>
            </tr>
            <tr>
                <th colspan="2">
                    <span class="text-primary">Pemasaran</span>
                </th>
            </tr>
            <tr>
                <th>Lokal</th>
                <td>{{ $pemasaran->lokal }}</td>
            </tr>
            <tr>
                <th>Regional</th>
                <td>{{ $pemasaran->regional }}</td>
            </tr>
            <tr>
                <th>Nasional</th>
                <td>{{ $pemasaran->nasional  }}</td>
            </tr>
            <tr>
                <th>Ekspor</th>
                <td>{{ $pemasaran->ekspor  }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection