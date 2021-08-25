<div class="form-group">
    <label>Satuan</label>
    <select name="satuan_bhn_bkr" class="custom-select" id="satuan_bhn_bkr">
        <option>-- Pilih Salah Satu --</option>
        <option value="-" @if($bhn_bkr->satuan_bhn_bkr == '-') selected @endif>-</option>
        <option value="0" @if($bhn_bkr->satuan_bhn_bkr == '0') selected @endif>0</option>
        <option value="bal" @if($bhn_bkr->satuan_bhn_bkr == 'bal') selected @endif>bal</option>
        <option value="bh" @if($bhn_bkr->satuan_bhn_bkr == 'bh') selected @endif>bh</option>
        <option value="bongkok" @if($bhn_bkr->satuan_bhn_bkr == 'bongkok') selected @endif>bongkok</option>
        <option value="botol" @if($bhn_bkr->satuan_bhn_bkr == 'botol') selected @endif>botol</option>
        <option value="buah" @if($bhn_bkr->satuan_bhn_bkr == 'buah') selected @endif>buah</option>
        <option value="buah bubutan" @if($bhn_bkr->satuan_bhn_bkr == 'buah bubutan') selected @endif>buah bubutan</option>
        <option value="bungkus" @if($bhn_bkr->satuan_bhn_bkr == 'bungkus') selected @endif>bungkus</option>
        <option value="butir" @if($bhn_bkr->satuan_bhn_bkr == 'butir') selected @endif>butir</option>
        <option value="dos" @if($bhn_bkr->satuan_bhn_bkr == 'dos') selected @endif>dos</option>
        <option value="eksemplar" @if($bhn_bkr->satuan_bhn_bkr == 'eksemplar') selected @endif>eksemplar</option>
        <option value="galon" @if($bhn_bkr->satuan_bhn_bkr == 'galon') selected @endif>galon</option>
        <option value="gelondong" @if($bhn_bkr->satuan_bhn_bkr == 'gelondong') selected @endif>gelondong</option>
        <option value="gram" @if($bhn_bkr->satuan_bhn_bkr == 'gram') selected @endif>gram</option>
        <option value="kaleng" @if($bhn_bkr->satuan_bhn_bkr == 'kaleng') selected @endif>kaleng</option>
        <option value="kg" @if($bhn_bkr->satuan_bhn_bkr == 'kg') selected @endif>kg</option>
        <option value="kodi" @if($bhn_bkr->satuan_bhn_bkr == 'kodi') selected @endif>kodi</option>
        <option value="kwintal" @if($bhn_bkr->satuan_bhn_bkr == 'kwintal') selected @endif>kwintal</option>
        <option value="lembar" @if($bhn_bkr->satuan_bhn_bkr == 'lembar') selected @endif>lembar</option>
        <option value="liter" @if($bhn_bkr->satuan_bhn_bkr == 'liter') selected @endif>liter</option>
        <option value="lonjor" @if($bhn_bkr->satuan_bhn_bkr == 'lonjor') selected @endif>lonjor</option>
        <option value="meter" @if($bhn_bkr->satuan_bhn_bkr == 'meter') selected @endif>meter</option>
        <option value="m2 / meter persegi" @if($bhn_bkr->satuan_bhn_bkr == 'm2 / meter persegi') selected @endif>m2 / meter persegi</option>
        <option value="m3 /meter kubik" @if($bhn_bkr->satuan_bhn_bkr == 'm3 /meter kubik') selected @endif>m3 /meter kubik</option>
        <option value="pak" @if($bhn_bkr->satuan_bhn_bkr == 'pak') selected @endif>pak</option>
        <option value="paket" @if($bhn_bkr->satuan_bhn_bkr == 'paket') selected @endif>paket</option>
        <option value="pasang" @if($bhn_bkr->satuan_bhn_bkr == 'pasang') selected @endif>pasang</option>
        <option value="pcs" @if($bhn_bkr->satuan_bhn_bkr == 'pcs') selected @endif>pcs</option>
        <option value="pigora" @if($bhn_bkr->satuan_bhn_bkr == 'pigora') selected @endif>pigora</option>
        <option value="potong" @if($bhn_bkr->satuan_bhn_bkr == 'potong') selected @endif>potong</option>
        <option value="rim" @if($bhn_bkr->satuan_bhn_bkr == 'rim') selected @endif>rim</option>
        <option value="roll" @if($bhn_bkr->satuan_bhn_bkr == 'roll') selected @endif>roll</option>
        <option value="rupiah" @if($bhn_bkr->satuan_bhn_bkr == 'rupiah') selected @endif>rupiah</option>
        <option value="set" @if($bhn_bkr->satuan_bhn_bkr == 'set') selected @endif>set</option>
        <option value="set (drumband)" @if($bhn_bkr->satuan_bhn_bkr == 'set (drumband)') selected @endif>set (drumband)</option>
        <option value="stel" @if($bhn_bkr->satuan_bhn_bkr == 'stel') selected @endif>stel</option>
        <option value="tabung" @if($bhn_bkr->satuan_bhn_bkr == 'tabung') selected @endif>tabung</option>
        <option value="tangkep" @if($bhn_bkr->satuan_bhn_bkr == 'tangkep') selected @endif>tangkep</option>
        <option value="TCD" @if($bhn_bkr->satuan_bhn_bkr == 'TCD') selected @endif>TCD</option>
        <option value="ton" @if($bhn_bkr->satuan_bhn_bkr == 'ton') selected @endif>ton</option>
        <option value="tundun" @if($bhn_bkr->satuan_bhn_bkr == 'tundun') selected @endif>tundun</option>
        <option value="unit" @if($bhn_bkr->satuan_bhn_bkr == 'unit') selected @endif>unit</option>
    </select>
</div>