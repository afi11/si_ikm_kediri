<span class="text-danger">Apabila kosong silahkan isi dengan tanda <b>-</b></span>
<form id="frmThp1">
    @csrf
    <input type="hidden" name="id_industri" id="id_industri" value="{{ $industri->id_industri }}" />
    <div class="form-group">
        <label for="tipe_usaha" class="col-form-label">Tipe Industri</label>
        <select class="custom-select" name="tipe_usaha" id="tipe_usaha">
            <option>-- Pilih Salah Satu --</option>
            <option value="kcl" @if($industri->tipe_usaha == 'kcl') selected @endif>Industri Kecil</option>
            <option value="mngh" @if($industri->tipe_usaha == 'mngh') selected @endif>Industri Menengah</option>
            <option value="bsr" @if($industri->tipe_usaha == 'bsr') selected @endif>Industri Besar</option>
        </select>
    </div>
    <div class="form-group">
        <label for="badan_usaha" class="col-form-label">Badan Usaha</label>
        <select class="custom-select" name="bu_id" id="bu_id">
            <option>-- Pilih Salah Satu --</option>
            @foreach ($bu as $data)                 
                <option @if($industri->bu_id == $data->id) selected @endif value="{{ $data->id }}">{{ $data->nama_badan_usaha }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="id_pemilik" class="col-form-label">Pemilik Industri</label>
        <input type="text" name="pemilik" id="pemilik" class="form-control" value="{{ $industri->pemilik }}" />
    </div>
    <div class="form-group">
        <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
        <input type="text" name="nama_perusahaan" id="nama_perusahaan" 
            class="form-control" value="{{ $industri->nama_perusahaan }}" />
    </div>
    <button type="button" id="simpanThp1" class="btn btn-rounded btn-primary btn-block mt-5">Simpan</button>
    <button type="button" id="loading1" class="btn btn-rounded btn-secondary hide btn-block mt-5">Menyimpan data....</button>
</form>