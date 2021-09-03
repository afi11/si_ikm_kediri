@php error_reporting(0); @endphp
<span class="text-danger">Apabila kosong silahkan isi dengan tanda <b>-</b></span>
<form id="frmThp10">
    @csrf
    <input type="hidden" name="id_industri" id="id_industri" value="{{ $industri->id_industri }}" />
    <input type="hidden" name="tipe" value="air" />
    <div class="form-group">
        <label class="col-form-label">Jenis</label>
        <select name="jenis_air" id="jenis_air" class="custom-select">
            <option value="">-- Pilih Salah Satu --</option>
            <option value="Air Tanah" @if($bhn_bkr->jenis_air == "Air Tanah") selected @endif>Air Tanah</option>
            <option value="Air PDAM" @if($bhn_bkr->jenis_air == "Air PDAM") selected @endif>Air PDAM</option>
        </select>
    </div>
    <div class="form-group">
        <label>Volume</label>
        <input type="text" step="1.0" name="volume_air" id="volume_air" 
          class="form-control input_numeric9" value="{{ $bhn_bkr->volume_air }}" />
        <i>(Ketik tanpa titik / koma, tanda koma terisi otomatis setelah diketik)</i>
    </div>
    <div class="form-group">
        <label class="col-form-label">Satuan</label>
        <input type="text" readonly class="form-control" name="satuan_air" value="m3 / meter kubik" />
    </div>
    <button type="button" id="simpanThp10" class="btn btn-rounded btn-primary btn-block mt-5">Simpan</button>
    <button type="button" id="loading10" class="btn btn-rounded btn-secondary hide btn-block mt-5">Menyimpan data....</button>
</form>