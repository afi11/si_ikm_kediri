<div class="form-group">
    <label>Satuan</label>
    <select name="satuan" class="custom-select" id="satuan">
        <option>-- Pilih Salah Satu --</option>
        <option value="-" @if($jenisproduksi->satuan == '-') selected @endif>-</option>
        <option value="0" @if($jenisproduksi->satuan == '0') selected @endif>0</option>
        <option value="bal" @if($jenisproduksi->satuan == 'bal') selected @endif>bal</option>
        <option value="bh" @if($jenisproduksi->satuan == 'bh') selected @endif>bh</option>
        <option value="bongkok" @if($jenisproduksi->satuan == 'bongkok') selected @endif>bongkok</option>
        <option value="botol" @if($jenisproduksi->satuan == 'botol') selected @endif>botol</option>
        <option value="buah" @if($jenisproduksi->satuan == 'buah') selected @endif>buah</option>
        <option value="buah bubutan" @if($jenisproduksi->satuan == 'buah bubutan') selected @endif>buah bubutan</option>
        <option value="bungkus" @if($jenisproduksi->satuan == 'bungkus') selected @endif>bungkus</option>
        <option value="butir" @if($jenisproduksi->satuan == 'butir') selected @endif>butir</option>
        <option value="dos" @if($jenisproduksi->satuan == 'dos') selected @endif>dos</option>
        <option value="eksemplar" @if($jenisproduksi->satuan == 'eksemplar') selected @endif>eksemplar</option>
        <option value="galon" @if($jenisproduksi->satuan == 'galon') selected @endif>galon</option>
        <option value="gelondong" @if($jenisproduksi->satuan == 'gelondong') selected @endif>gelondong</option>
        <option value="gram" @if($jenisproduksi->satuan == 'gram') selected @endif>gram</option>
        <option value="kaleng" @if($jenisproduksi->satuan == 'kaleng') selected @endif>kaleng</option>
        <option value="kg" @if($jenisproduksi->satuan == 'kg') selected @endif>kg</option>
        <option value="kodi" @if($jenisproduksi->satuan == 'kodi') selected @endif>kodi</option>
        <option value="kwintal" @if($jenisproduksi->satuan == 'kwintal') selected @endif>kwintal</option>
        <option value="lembar" @if($jenisproduksi->satuan == 'lembar') selected @endif>lembar</option>
        <option value="liter" @if($jenisproduksi->satuan == 'liter') selected @endif>liter</option>
        <option value="lonjor" @if($jenisproduksi->satuan == 'lonjor') selected @endif>lonjor</option>
        <option value="meter" @if($jenisproduksi->satuan == 'meter') selected @endif>meter</option>
        <option value="m2 / meter persegi" @if($jenisproduksi->satuan == 'm2 / meter persegi') selected @endif>m2 / meter persegi</option>
        <option value="m3 /meter kubik" @if($jenisproduksi->satuan == 'm3 /meter kubik') selected @endif>m3 /meter kubik</option>
        <option value="pak" @if($jenisproduksi->satuan == 'pak') selected @endif>pak</option>
        <option value="paket" @if($jenisproduksi->satuan == 'paket') selected @endif>paket</option>
        <option value="pasang" @if($jenisproduksi->satuan == 'pasang') selected @endif>pasang</option>
        <option value="pcs" @if($jenisproduksi->satuan == 'pcs') selected @endif>pcs</option>
        <option value="pigora" @if($jenisproduksi->satuan == 'pigora') selected @endif>pigora</option>
        <option value="potong" @if($jenisproduksi->satuan == 'potong') selected @endif>potong</option>
        <option value="rim" @if($jenisproduksi->satuan == 'rim') selected @endif>rim</option>
        <option value="roll" @if($jenisproduksi->satuan == 'roll') selected @endif>roll</option>
        <option value="rupiah" @if($jenisproduksi->satuan == 'rupiah') selected @endif>rupiah</option>
        <option value="set" @if($jenisproduksi->satuan == 'set') selected @endif>set</option>
        <option value="set (drumband)" @if($jenisproduksi->satuan == 'set (drumband)') selected @endif>set (drumband)</option>
        <option value="stel" @if($jenisproduksi->satuan == 'stel') selected @endif>stel</option>
        <option value="tabung" @if($jenisproduksi->satuan == 'tabung') selected @endif>tabung</option>
        <option value="tangkep" @if($jenisproduksi->satuan == 'tangkep') selected @endif>tangkep</option>
        <option value="TCD" @if($jenisproduksi->satuan == 'TCD') selected @endif>TCD</option>
        <option value="ton" @if($jenisproduksi->satuan == 'ton') selected @endif>ton</option>
        <option value="tundun" @if($jenisproduksi->satuan == 'tundun') selected @endif>tundun</option>
        <option value="unit" @if($jenisproduksi->satuan == 'unit') selected @endif>unit</option>
    </select>
</div>