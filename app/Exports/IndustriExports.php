<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class IndustriExports implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $produk;
    protected $kecamatan;
    protected $kelurahan;

    function __construct($produk,$kecamatan,$kelurahan)
    {
        $this->produk = $produk;
        $this->kecamatan = $kecamatan;
        $this->kelurahan = $kelurahan;
    }

    public function collection()
    {
        if($this->produk == "" && $this->kecamatan == "" && $this->kelurahan == ""){
            return \App\industri::join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
                ->join('kecamatan','kecamatan.id','=','industri.kec_id')
                ->join('badanusaha','badanusaha.id','=','industri.bu_id')
                ->join('kelurahans','kelurahans.id','=','industri.kel_id')
                ->join('tenagakerja','tenagakerja.id_industri','=','industri.id_industri')
                ->join('bahanbaku','bahanbaku.id_industri','=','industri.id_industri')
                ->join('pemasaran','pemasaran.id_industri','=','industri.id_industri')
                ->get([
                    'badanusaha.nama_badan_usaha','industri.nama_perusahaan','industri.pemilik','industri.jalan',
                    'kelurahans.nama_kel','kecamatan.nama_kec','industri.telp_fax','tenagakerja.n_pr','tenagakerja.n_lk','tenagakerja.n_asing',
                    'jenisproduksi.kbli','jenisproduksi.kode_cabang','jenisproduksi.nama_produk','jenisproduksi.kapasitas_produksi',
                    'jenisproduksi.satuan','jenisproduksi.nilai_produksi','bahanbaku.jenis','bahanbaku.volume','bahanbaku.jenis','bahanbaku.volume',
                    'bahanbaku.satuan_bhn_bk','bahanbaku.nilai_bb_bp','bahanbaku.asal_bb','pemasaran.lokal','pemasaran.regional','pemasaran.nasional','pemasaran.ekspor','industri.no_ijin','industri.tgl_ijin',
                    'industri.status_pm','industri.klasifikasi'
                ]);
        }
        if($this->produk != "" && $this->kecamatan != "" && $this->kelurahan != ""){
            return \App\industri::join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
                ->join('kecamatan','kecamatan.id','=','industri.kec_id')
                ->join('badanusaha','badanusaha.id','=','industri.bu_id')
                ->join('kelurahans','kelurahans.id','=','industri.kel_id')
                ->join('tenagakerja','tenagakerja.id_industri','=','industri.id_industri')
                ->join('bahanbaku','bahanbaku.id_industri','=','industri.id_industri')
                ->join('pemasaran','pemasaran.id_industri','=','industri.id_industri')
                ->where('jenisproduksi.nama_produk',$this->produk)
                ->where('industri.kel_id',$this->kelurahan)
                ->where('industri.kec_id',$this->kecamatan)
                ->get([
                    'badanusaha.nama_badan_usaha','industri.nama_perusahaan','industri.pemilik','industri.jalan',
                    'kelurahans.nama_kel','kecamatan.nama_kec','industri.telp_fax','tenagakerja.n_pr','tenagakerja.n_lk','tenagakerja.n_asing',
                    'jenisproduksi.kbli','jenisproduksi.kode_cabang','jenisproduksi.nama_produk','jenisproduksi.kapasitas_produksi',
                    'jenisproduksi.satuan','jenisproduksi.nilai_produksi','bahanbaku.jenis','bahanbaku.volume','bahanbaku.jenis','bahanbaku.volume',
                    'bahanbaku.satuan_bhn_bk','bahanbaku.nilai_bb_bp','bahanbaku.asal_bb','pemasaran.lokal','pemasaran.regional','pemasaran.nasional','pemasaran.ekspor','industri.no_ijin','industri.tgl_ijin',
                    'industri.status_pm','industri.klasifikasi'
                ]);
        }
        if($this->kecamatan == "" && $this->kelurahan == ""){
            return \App\industri::join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
                ->join('kecamatan','kecamatan.id','=','industri.kec_id')
                ->join('badanusaha','badanusaha.id','=','industri.bu_id')
                ->join('kelurahans','kelurahans.id','=','industri.kel_id')
                ->join('tenagakerja','tenagakerja.id_industri','=','industri.id_industri')
                ->join('bahanbaku','bahanbaku.id_industri','=','industri.id_industri')
                ->join('pemasaran','pemasaran.id_industri','=','industri.id_industri')
                ->where('jenisproduksi.nama_produk',$this->produk)
                ->get([
                    'badanusaha.nama_badan_usaha','industri.nama_perusahaan','industri.pemilik','industri.jalan',
                    'kelurahans.nama_kel','kecamatan.nama_kec','industri.telp_fax','tenagakerja.n_pr','tenagakerja.n_lk','tenagakerja.n_asing',
                    'jenisproduksi.kbli','jenisproduksi.kode_cabang','jenisproduksi.nama_produk','jenisproduksi.kapasitas_produksi',
                    'jenisproduksi.satuan','jenisproduksi.nilai_produksi','bahanbaku.jenis','bahanbaku.volume','bahanbaku.jenis','bahanbaku.volume',
                    'bahanbaku.satuan_bhn_bk','bahanbaku.nilai_bb_bp','bahanbaku.asal_bb','pemasaran.lokal','pemasaran.regional','pemasaran.nasional','pemasaran.ekspor','industri.no_ijin','industri.tgl_ijin',
                    'industri.status_pm','industri.klasifikasi'
                ]);
        }
        if($this->produk == "" && $this->kelurahan == ""){
            return \App\industri::join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
                ->join('kecamatan','kecamatan.id','=','industri.kec_id')
                ->join('badanusaha','badanusaha.id','=','industri.bu_id')
                ->join('kelurahans','kelurahans.id','=','industri.kel_id')
                ->join('tenagakerja','tenagakerja.id_industri','=','industri.id_industri')
                ->join('bahanbaku','bahanbaku.id_industri','=','industri.id_industri')
                ->join('pemasaran','pemasaran.id_industri','=','industri.id_industri')
                ->where('industri.kec_id',$this->kecamatan)
                ->get([
                    'badanusaha.nama_badan_usaha','industri.nama_perusahaan','industri.pemilik','industri.jalan',
                    'kelurahans.nama_kel','kecamatan.nama_kec','industri.telp_fax','tenagakerja.n_pr','tenagakerja.n_lk','tenagakerja.n_asing',
                    'jenisproduksi.kbli','jenisproduksi.kode_cabang','jenisproduksi.nama_produk','jenisproduksi.kapasitas_produksi',
                    'jenisproduksi.satuan','jenisproduksi.nilai_produksi','bahanbaku.jenis','bahanbaku.volume','bahanbaku.jenis','bahanbaku.volume',
                    'bahanbaku.satuan_bhn_bk','bahanbaku.nilai_bb_bp','bahanbaku.asal_bb','pemasaran.lokal','pemasaran.regional','pemasaran.nasional','pemasaran.ekspor','industri.no_ijin','industri.tgl_ijin',
                    'industri.status_pm','industri.klasifikasi'
                ]);
        }
        if($this->produk == ""){
            return \App\industri::join('jenisproduksi','jenisproduksi.id_industri','=','industri.id_industri')
                ->join('kecamatan','kecamatan.id','=','industri.kec_id')
                ->join('badanusaha','badanusaha.id','=','industri.bu_id')
                ->join('kelurahans','kelurahans.id','=','industri.kel_id')
                ->join('tenagakerja','tenagakerja.id_industri','=','industri.id_industri')
                ->join('bahanbaku','bahanbaku.id_industri','=','industri.id_industri')
                ->join('pemasaran','pemasaran.id_industri','=','industri.id_industri')
                ->where('industri.kel_id',$this->kelurahan)
                ->where('industri.kec_id',$this->kecamatan)
                ->get([
                    'badanusaha.nama_badan_usaha','industri.nama_perusahaan','industri.pemilik','industri.jalan',
                    'kelurahans.nama_kel','kecamatan.nama_kec','industri.telp_fax','tenagakerja.n_pr','tenagakerja.n_lk','tenagakerja.n_asing',
                    'jenisproduksi.kbli','jenisproduksi.kode_cabang','jenisproduksi.nama_produk','jenisproduksi.kapasitas_produksi',
                    'jenisproduksi.satuan','jenisproduksi.nilai_produksi','bahanbaku.jenis','bahanbaku.volume','bahanbaku.jenis','bahanbaku.volume',
                    'bahanbaku.satuan_bhn_bk','bahanbaku.nilai_bb_bp','bahanbaku.asal_bb','pemasaran.lokal','pemasaran.regional','pemasaran.nasional','pemasaran.ekspor','industri.no_ijin','industri.tgl_ijin',
                    'industri.status_pm','industri.klasifikasi'
                ]);
        }
    }

    public function headings(): array
    {
        return [
            'BADAN USAHA',
            'NAMA PERUSAHAAN',
            'NAMA PEMILIK',
            'JALAN',
            'DESA/KEL',
            'KECAMATAN',
            'TELP/FAX',
            'TENAGA KERJA Pr',
            'TENAGA KERJA Lk',
            'TENAGA KERJA As',
            'KBLI',
            'KODE CABANG',
            'NAMA PRODUK',
            'KAPASITAS PRODUKSI',
            'SATUAN',
            'NILAI',
            'JENIS',
            'VOLUME',
            'SATUAN',
            'NILAI BB/BP',
            'ASAL BB',
            'LOKAL',
            'REGIONAL',
            'NASIONAL',
            'EXSKPORT',
            'NOMOR IJIN',
            'TANGGAL IJIN',
            'STATUS PM',
            'KLASIFIKASI'
        ];
    }

}