@php error_reporting(0); @endphp
<span class="text-danger">Isikan dengan <b>0</b>,
    Apabila tidak ada </span>
<form id="frmThp5">
    @csrf
    <input type="hidden" name="id_industri" id="id_industri" value="{{ $industri->id_industri }}" />
    <div class="form-group">
        <label class="col-form-label">Jumlah TK Perempuan</label>
        <input type="number" name="n_pr" id="n_pr" 
            class="form-control" value="{{ $naker->n_pr }}" />
    </div>
    <div class="form-group">
        <label>Jumlah TK Laki-Laki</label>
        <input type="number" name="n_lk" id="n_lk" 
          class="form-control" value="{{ $naker->n_lk }}" />
    </div>
    <div class="form-group">
        <label>Jumlah TK Asing</label>
        <input type="number" name="n_asing" class="form-control" 
          value="{{ $naker->n_asing }}" id="n_asing" />
    </div>
    <div class="form-group">
        <label>Jumlah Tenaga Kerja</label>
        <input type="number" class="form-control" readonly value="{{ $naker->n_pr + $naker->n_lk + $naker->n_asing }}"  id="n_tenaker" />
    </div>
    <button type="button" id="simpanThp5" class="btn btn-rounded btn-primary btn-block mt-5">Simpan</button>
</form>