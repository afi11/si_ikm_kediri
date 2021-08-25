@php error_reporting(0); @endphp
<span class="text-danger">Apabila kosong silahkan isi dengan tanda <b>-</b></span>
<form id="frmThp8">
    @csrf
    <input type="hidden" name="id_industri" id="id_industri" value="{{ $industri->id_industri }}" />
    <input type="hidden" name="tipe" value="listrik" />
    <div class="form-group">
        <label class="col-form-label">Jenis</label>
        <select name="jenis_listrik" id="jenis_listrik" class="custom-select">
            <option value="">-- Pilih Salah Satu --</option>
            <option value="PLN" @if($bhn_bkr->jenis_listrik == "PLN") selected @endif>PLN</option>
            <option value="Generator" @if($bhn_bkr->jenis_listrik == "Generator") selected @endif>Generator</option>
        </select>
    </div>
    <div class="form-group">
        <label>Volume</label>
        <input type="text" step="1.0" name="volume_listrik" id="volume_listrik" 
          class="form-control input_numeric7" value="{{ $bhn_bkr->volume_listrik }}" />
        <i>(Ketik tanpa titik / koma, tanda koma terisi otomatis setelah diketik)</i>
    </div>
    <div class="form-group">
        <label class="col-form-label">Satuan</label>
        <input type="text" readonly class="form-control" name="satuan_listrik" value="kwh" />
    </div>
    <button type="button" id="simpanThp8" class="btn btn-rounded btn-primary btn-block mt-5">Simpan</button>
</form>