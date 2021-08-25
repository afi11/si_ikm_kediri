@php error_reporting(0); @endphp
<span class="text-danger">Apabila kosong silahkan isi dengan tanda <b>-</b></span>
<form id="frmThp7">
    @csrf
    <input type="hidden" name="id_industri" id="id_industri" value="{{ $industri->id_industri }}" />
    <input type="hidden" name="tipe" value="bbm" />
    <div class="form-group">
        <label class="col-form-label">Jenis</label>
        <input type="text" name="jenis_bbm" id="jenis_bbm" 
            class="form-control" value="{{ $bhn_bkr->jenis_bbm }}" />
    </div>
    <div class="form-group">
        <label>Volume</label>
        <input type="text" step="1.0" name="volume_bbm" id="volume_bbm" 
          class="form-control input_numeric5" value="{{ $bhn_bkr->volume_bbm }}" />
        <i>(Ketik tanpa titik / koma, tanda koma terisi otomatis setelah diketik)</i>
    </div>
    <div class="form-group">
        <label class="col-form-label">Satuan</label>
        <input type="text" readonly class="form-control" name="satuan_bbm" value="liter" />
    </div>
    <button type="button" id="simpanThp7" class="btn btn-rounded btn-primary btn-block mt-5">Simpan</button>
</form>