<div class="form-group">
    <label>Satuan</label>
    <select name="satuan_bhn_bk" class="custom-select" id="satuan_bhn_bk">
        <option>-- Pilih Salah Satu --</option>
        <option value="-" @if($bhn_bk->satuan_bhn_bk == '-') selected @endif>-</option>
        <option value="0" @if($bhn_bk->satuan_bhn_bk == '0') selected @endif>0</option>
        <option value="bal" @if($bhn_bk->satuan_bhn_bk == 'bal') selected @endif>bal</option>
        <option value="bh" @if($bhn_bk->satuan_bhn_bk == 'bh') selected @endif>bh</option>
        <option value="bongkok" @if($bhn_bk->satuan_bhn_bk == 'bongkok') selected @endif>bongkok</option>
        <option value="botol" @if($bhn_bk->satuan_bhn_bk == 'botol') selected @endif>botol</option>
        <option value="buah" @if($bhn_bk->satuan_bhn_bk == 'buah') selected @endif>buah</option>
        <option value="buah bubutan" @if($bhn_bk->satuan_bhn_bk == 'buah bubutan') selected @endif>buah bubutan</option>
        <option value="bungkus" @if($bhn_bk->satuan_bhn_bk == 'bungkus') selected @endif>bungkus</option>
        <option value="butir" @if($bhn_bk->satuan_bhn_bk == 'butir') selected @endif>butir</option>
        <option value="dos" @if($bhn_bk->satuan_bhn_bk == 'dos') selected @endif>dos</option>
        <option value="eksemplar" @if($bhn_bk->satuan_bhn_bk == 'eksemplar') selected @endif>eksemplar</option>
        <option value="galon" @if($bhn_bk->satuan_bhn_bk == 'galon') selected @endif>galon</option>
        <option value="gelondong" @if($bhn_bk->satuan_bhn_bk == 'gelondong') selected @endif>gelondong</option>
        <option value="gram" @if($bhn_bk->satuan_bhn_bk == 'gram') selected @endif>gram</option>
        <option value="kaleng" @if($bhn_bk->satuan_bhn_bk == 'kaleng') selected @endif>kaleng</option>
        <option value="kg" @if($bhn_bk->satuan_bhn_bk == 'kg') selected @endif>kg</option>
        <option value="kodi" @if($bhn_bk->satuan_bhn_bk == 'kodi') selected @endif>kodi</option>
        <option value="kwintal" @if($bhn_bk->satuan_bhn_bk == 'kwintal') selected @endif>kwintal</option>
        <option value="lembar" @if($bhn_bk->satuan_bhn_bk == 'lembar') selected @endif>lembar</option>
        <option value="liter" @if($bhn_bk->satuan_bhn_bk == 'liter') selected @endif>liter</option>
        <option value="lonjor" @if($bhn_bk->satuan_bhn_bk == 'lonjor') selected @endif>lonjor</option>
        <option value="meter" @if($bhn_bk->satuan_bhn_bk == 'meter') selected @endif>meter</option>
        <option value="m2 / meter persegi" @if($bhn_bk->satuan_bhn_bk == 'm2 / meter persegi') selected @endif>m2 / meter persegi</option>
        <option value="m3 /meter kubik" @if($bhn_bk->satuan_bhn_bk == 'm3 /meter kubik') selected @endif>m3 /meter kubik</option>
        <option value="pak" @if($bhn_bk->satuan_bhn_bk == 'pak') selected @endif>pak</option>
        <option value="paket" @if($bhn_bk->satuan_bhn_bk == 'paket') selected @endif>paket</option>
        <option value="pasang" @if($bhn_bk->satuan_bhn_bk == 'pasang') selected @endif>pasang</option>
        <option value="pcs" @if($bhn_bk->satuan_bhn_bk == 'pcs') selected @endif>pcs</option>
        <option value="pigora" @if($bhn_bk->satuan_bhn_bk == 'pigora') selected @endif>pigora</option>
        <option value="potong" @if($bhn_bk->satuan_bhn_bk == 'potong') selected @endif>potong</option>
        <option value="rim" @if($bhn_bk->satuan_bhn_bk == 'rim') selected @endif>rim</option>
        <option value="roll" @if($bhn_bk->satuan_bhn_bk == 'roll') selected @endif>roll</option>
        <option value="rupiah" @if($bhn_bk->satuan_bhn_bk == 'rupiah') selected @endif>rupiah</option>
        <option value="set" @if($bhn_bk->satuan_bhn_bk == 'set') selected @endif>set</option>
        <option value="set (drumband)" @if($bhn_bk->satuan_bhn_bk == 'set (drumband)') selected @endif>set (drumband)</option>
        <option value="stel" @if($bhn_bk->satuan_bhn_bk == 'stel') selected @endif>stel</option>
        <option value="tabung" @if($bhn_bk->satuan_bhn_bk == 'tabung') selected @endif>tabung</option>
        <option value="tangkep" @if($bhn_bk->satuan_bhn_bk == 'tangkep') selected @endif>tangkep</option>
        <option value="TCD" @if($bhn_bk->satuan_bhn_bk == 'TCD') selected @endif>TCD</option>
        <option value="ton" @if($bhn_bk->satuan_bhn_bk == 'ton') selected @endif>ton</option>
        <option value="tundun" @if($bhn_bk->satuan_bhn_bk == 'tundun') selected @endif>tundun</option>
        <option value="unit" @if($bhn_bk->satuan_bhn_bk == 'unit') selected @endif>unit</option>
    </select>
</div>