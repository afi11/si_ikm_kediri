@php error_reporting(0); @endphp
<span class="text-danger">Apabila kosong silahkan isi dengan tanda <b>-</b></span>
<form id="frmThp4">
    @csrf
    <input type="hidden" name="id_industri" id="id_industri" value="{{ $industri->id_industri }}" />
    <div class="form-group">
        <label class="col-form-label">Jenis</label>
        <input type="text" name="jenis" id="jenis" 
            class="form-control" value="{{ $bhn_bk->jenis }}" />
    </div>
    <div class="form-group">
        <label>Volume</label>
        <input type="text" name="volume" id="volume" 
          step="1.0" class="form-control input_numeric3" value="{{ $bhn_bk->volume }}" />
        <i>(Ketik tanpa titik / koma, tanda koma terisi otomatis setelah diketik)</i>
    </div>
    @include('industri.itemcruds.satuan2')
    <div class="form-group">
      <label>Nilai BB / BP</label>
      <input type="text" step="1.0" name="nilai_bb_bp" class="form-control input_numeric4"
        value="{{ $bhn_bk->nilai_bb_bp }}" id="nilai_bb_bp" />
      <i>(Ketik tanpa titik / koma, tanda koma terisi otomatis setelah diketik)</i>
    </div>
    <div class="form-group">
      <label>Asal BB</label>
      <input type="text" name="asal_bb" class="form-control"
        value="{{ $bhn_bk->asal_bb }}" id="asal_bb" />
    </div>
    <button type="button" id="simpanThp4" class="btn btn-rounded btn-primary btn-block mt-5">Simpan</button>
    <button type="button" id="loading4" class="btn btn-rounded btn-secondary hide btn-block mt-5">Menyimpan data....</button>
</form>