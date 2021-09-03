@php error_reporting(0); @endphp
<span class="text-danger">Apabila kosong silahkan isi dengan tanda <b>-</b></span>
<form id="frmThp3">
    @csrf
    <input type="hidden" name="id_industri" id="id_industri" value="{{ $industri->id_industri }}" />
    <div class="form-group">
        <label for="nama_perusahaan" class="col-form-label">KBLI</label>
        <input type="text" name="kbli" id="kbli" 
            class="form-control" value="{{ $jenisproduksi->kbli }}" />
    </div>
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" 
          value="{{ $jenisproduksi->nama_produk }}" id="nama_produk" />
    </div>
    <div class="form-group">
      <label>Kapasitas Produksi</label>
      <input type="text" name="kapasitas_produksi" step="1.0" class="form-control input_numeric1"
        value="{{ $jenisproduksi->kapasitas_produksi }}" id="kapasitas_produksi" />
    </div>
    @include('industri.itemcruds.satuan')
    <div class="form-group">
      <label>Nilai Produksi</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">RP. </span>
        </div>
        <input type="text" name="nilai_produksi" step="1.0" class="form-control input_numeric2"
          value="{{ $jenisproduksi->nilai_produksi }}" id="nilai_produksi" />
      </div>
      <i>(Ketik tanpa titik / koma, tanda koma terisi otomatis setelah diketik)</i>
    </div>
    <button type="button" id="simpanThp3" class="btn btn-rounded btn-primary btn-block mt-5">Simpan</button>
    <button type="button" id="loading3" class="btn btn-rounded btn-secondary hide btn-block mt-5">Menyimpan data....</button>
</form>