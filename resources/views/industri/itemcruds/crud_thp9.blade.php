@php error_reporting(0); @endphp
<span class="text-danger">Apabila kosong silahkan isi dengan tanda <b>-</b></span>
<form id="frmThp9">
    @csrf
    <input type="hidden" name="id_industri" id="id_industri" value="{{ $industri->id_industri }}" />
    <input type="hidden" name="tipe" value="gas" />
    <div class="form-group">
        <label class="col-form-label">Jenis</label>
        <input type="text" name="jenis_gas" id="jenis_gas" 
            class="form-control" value="{{ $bhn_bkr->jenis_gas }}" />
    </div>
    <div class="form-group">
        <label>Volume</label>
        <input type="text" step="1.0" name="volume_gas" id="volume_gas" 
          class="form-control input_numeric8" value="{{ $bhn_bkr->volume_gas }}" />
        <i>(Ketik tanpa titik / koma, tanda koma terisi otomatis setelah diketik)</i>
    </div>
    <div class="form-group">
        <label class="col-form-label">Satuan</label>
        <select name="satuan_gas" id="satuan_gas" class="custom-select">
            <option value="">-- Pilih Salah Satu --</option>
            <option value="kg" @if($bhn_bkr->satuan_gas == "kg") selected @endif>kg</option>
            <option value="tabung" @if($bhn_bkr->satuan_gas == "tabung") selected @endif>tabung</option>
        </select>
    </div>
    <button type="button" id="simpanThp9" class="btn btn-rounded btn-primary btn-block mt-5">Simpan</button>
    <button type="button" id="loading9" class="btn btn-rounded btn-secondary hide btn-block mt-5">Menyimpan data....</button>
</form>