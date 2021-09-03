@php error_reporting(0); @endphp
<span class="text-danger">Total semua kolom harus berjumlah <b>100</b>
<form id="frmThp6">
    @csrf
    <input type="hidden" name="id_industri" id="id_industri" value="{{ $industri->id_industri }}" />
    <input type="hidden" id="tipe_form" value="thp6" /> 
    <div class="form-group">
        <label class="col-form-label">Lokal</label>
        <input type="number" name="lokal" id="lokal" 
            class="form-control" value="{{ $pemasaran->lokal }}" />
    </div>
    <div class="form-group">
        <label>Regional</label>
        <input type="number" name="regional" id="regional" 
          class="form-control" value="{{ $pemasaran->regional }}" />
    </div>
    <div class="form-group">
        <label>Nasional</label>
        <input type="number" name="nasional" class="form-control" 
          value="{{ $pemasaran->nasional }}" id="nasional" />
    </div>
    <div class="form-group">
        <label>Ekspor</label>
        <input type="number" name="ekspor" class="form-control" 
          value="{{ $pemasaran->ekspor }}" id="ekspor" />
    </div>
    <button type="button" id="simpanThp6" class="btn btn-rounded btn-primary btn-block mt-5">Simpan</button>
    <button type="button" id="loading6" class="btn btn-rounded btn-secondary hide btn-block mt-5">Menyimpan data....</button>
</form>