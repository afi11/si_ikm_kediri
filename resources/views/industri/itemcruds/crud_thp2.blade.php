<span class="text-danger">Apabila kosong silahkan isi dengan tanda <b>-</b></span>
<form id="frmThp2">
    @csrf
    <input type="hidden" name="id_industri" id="id_industri" value="{{ $industri->id_industri }}" />
    <div class="form-group">
        <label for="nama_perusahaan" class="col-form-label">Nomor Ijin</label>
        <input type="text" name="no_ijin" id="no_ijin" 
            class="form-control" value="{{ $industri->no_ijin }}" />
    </div>
    <div class="form-group">
        <label>Tanggal Ijin</label>
        <input type="date" name="tgl_ijin" id="tgl_ijin" 
          class="form-control" value="{{ $industri->tgl_ijin }}" />
    </div>
    <div class="form-group">
        <label>Status PM</label>
        <select name="status_pm" class="custom-select">
          <option>-- Pilih Salah Satu --</option>
          <option @if($industri->status_pm == "pma") selected @endif value="pma">PMA</option>
          <option  @if($industri->status_pm == "pmdn") selected @endif value="pmdn">PMDM</option>
        </select>
    </div>
    <div class="form-group">
      <label>Klasifikasi</label>
      <input type="text" name="klasifikasi" class="form-control"
        value="{{ $industri->klasifikasi }}" id="klasifikasi" />
    </div>
    <div class="form-group">
      <label>Jalan</label>
      <input type="text" name="jalan" class="form-control"
        value="{{ $industri->jalan }}" id="jalan" />
    </div>
    <div class="form-group">
      <label class="col-form-label">Kecamatan</label>
      <select class="custom-select" name="kec_id" id="kec_id">
        <option>Pilih salah satu kecamatan</option>
        @foreach ($kec as $item)         
          <option @if($item->id == $industri->kec_id) selected @endif value="{{ $item->id }}">{{ $item->nama_kec }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label class="col-form-label">Kelurahan</label>
      @if($industri->kel_id != null)
        <div id="kelurahan_before_edit">
          <div class="input-group mb-3">
              <input type="text" readonly class="form-control" value="{{ getNamaKelurahan($industri->kel_id) }}"  />
              <input type="hidden" name="kel_id" value="{{ $industri->kel_id }}" />
              <div class="input-group-append">
                  <button class="btn btn-secondary btn-ganti-kelurahan" type="button" id="basic-addon2">Ganti</button>
              </div>
          </div>
        </div>
        <div class="hide select-kelurahan">
            <div class="row">
                <div class="col-11">
                  <select class="custom-select select2_kel" name="kel_id" id="kel_id"></select>
                </div>
                <div class="col-1">
                    <button type="button" class="close close-kelurahan">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
      @else
       <select class="custom-select select2_kel" name="kel_id" id="kel_id"></select>
      @endif
    </div>
    <div class="form-group">
      <label>Telepon / Fax</label>
      <input type="text" name="telp_fax" class="form-control"
        value="{{ $industri->telp_fax }}" id="telp_fax" />
    </div>
    <div class="form-group">
      <label>Nilai Investasi</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">RP. </span>
        </div>
        <input type="text" name="nilai_investasi" step="1.0" class="form-control input_numeric6"
          value="{{ $industri->nilai_investasi }}" id="nilai_investasi" />
      </div>
      <i>(Ketik tanpa titik / koma, tanda koma terisi otomatis setelah diketik)</i>
    </div>
    <button type="button" id="simpanThp2" class="btn btn-rounded btn-primary btn-block mt-5">Simpan</button>
</form>
<script>
   var value_kec = "";
</script>
@if($industri->kel_id != null) <script> value_kec =  "{{ $industri->kec_id }}"; </script>
@else <script> value_kec = ""; </script>
@endif