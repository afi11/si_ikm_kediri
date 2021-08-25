<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/chartist-bundle/chartist.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/morris-bundle/morris.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/c3charts/c3.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <title>@yield('title')</title>
    <style>
        .hide {
            display: none;
        }
        .clear-list {
            list-style: none;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('templates.navbar')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
         <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('templates.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
                @include('templates.footer')
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    {{-- Datatable --}}
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    {{-- Select 2 --}}
    <script src="{{ asset('assets/vendor/select2/js/select2.min.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    {{-- Momentjs --}}
    <script src="{{ asset('assets/vendor/momentjs/moment.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{ asset('assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/charts/morris-bundle/morris.js')}}"></script>
    {{-- <!-- chart c3 js -->
    <script src="{{ asset('assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{ asset('assets/libs/js/dashboard-ecommerce.js')}}"></script> --}}

    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var mainUrl = '{{ url("") }}';

        $(function(){
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                sDom: 'lrtip',
                bLengthChange: false,
                ajax: {
                    url: mainUrl+'/dashboard',
                    data: function(d){
                        d.nama_perusahaan = $('#nama_perusahaan').val(),
                        d.search = $('input[type="search"]').val()
                    }
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'nama_perusahaan', name: 'nama_perusahaan'},
                    {data: 'nama_produk', name:'nama_produk'},
                    {data: 'nama_kec', name:'nama_kec'},
                    {data: 'action', name:'action', orderable: false, searchable: false},
                ],
            });

            $('#nama_perusahaan').keyup(function(){
                table.draw();
            });
        });

        // initial datatable
        $("#dataMaster").DataTable();
        $("#dataMaster1").DataTable();
        $("#dataMaster2").DataTable();

        // select dropdown pemilik
            $('.select2_kec').select2({
                minimumInputLength: 3,
                allowClear: true,
                placeholder: 'Masukan kecamatan',
                ajax: {
                    dataType: 'json',
                    url: mainUrl+'/getkec',
                    delay: 800,
                    data: function(params) {
                        return {
                        search: params.term
                        }
                    },
                    processResults: function (data, page) {
                    return {
                        results: data
                    };
                    },
                }
            }).on('select2_kec:select', function (evt) {
                var data = $(".select2_kec option:selected").text();
            });
      

        $("#simpanIndustri").click(function(){
            var dataFrom = $('#frmThp1').serialize();
            var url =  mainUrl+'/crudthp1';
            submitData(url,dataFrom,'smpn_ind');
        });

        $("#simpanThp1").click(function(){
            var dataFrom = $('#frmThp1').serialize();
            var url =  mainUrl+'/crudthp1_update';
            submitData(url,dataFrom,'update_thp1');
        });

        $("#simpanThp2").click(function(){
            var dataFrom = $('#frmThp2').serialize();
            var url =  mainUrl+'/crudthp2';
            submitData(url,dataFrom,'update_thp2');
        });

        $("#simpanThp3").click(function(){
            var dataFrom = $('#frmThp3').serialize();
            var url =  mainUrl+'/crudthp3';
            submitData(url,dataFrom,'update_thp3');
        });

        $("#simpanThp4").click(function(){
            var dataFrom = $('#frmThp4').serialize();
            var url =  mainUrl+'/crudthp4';
            submitData(url,dataFrom,'update_thp4');
        });

        $("#simpanThp5").click(function(){
            var dataFrom = $('#frmThp5').serialize();
            var url =  mainUrl+'/crudthp5';
            submitData(url,dataFrom,'update_thp5');
        });

        $("#simpanThp6").click(function(){
            var dataFrom = $('#frmThp6').serialize();
            var url =  mainUrl+'/crudthp6';
            submitData(url,dataFrom,'update_thp6');
        });

        $("#simpanThp7").click(function(){
            var dataFrom = $('#frmThp7').serialize();
            var url =  mainUrl+'/crudthp7';
            submitData(url,dataFrom,'update_thp7');
        });

        $("#simpanThp8").click(function(){
            var dataFrom = $('#frmThp8').serialize();
            var url =  mainUrl+'/crudthp7';
            submitData(url,dataFrom,'update_thp8');
        });

        $("#simpanThp9").click(function(){
            var dataFrom = $('#frmThp9').serialize();
            var url =  mainUrl+'/crudthp7';
            submitData(url,dataFrom,'update_thp9');
        });

        $("#simpanThp10").click(function(){
            var dataFrom = $('#frmThp10').serialize();
            var url =  mainUrl+'/crudthp7';
            submitData(url,dataFrom,'update_thp10');
        });

        function addHideAlert(){
            var notif = document.querySelector("#notifikasi_edit_industri");
            notif.classList.add("hide");
        }

        function submitData(url, data, tipe){
            if(tipe == 'update_thp6' ){
                const lokal = document.getElementById("lokal").value;
                const regional = document.getElementById("regional").value;
                const nasional = document.getElementById("nasional").value;
                const ekspor = document.getElementById("ekspor").value;
                const total = parseInt(lokal) + parseInt(regional) + parseInt(nasional) + parseInt(ekspor);
                if(total < 100){
                    alert("Total semua pemasaran lokal, regional, nasional, dan ekspor wajib 100 %");
                }else{
                    postData(url, data, tipe);
                }
            }else{
               postData(url, data, tipe);
            }
        }

        function postData(url, data, tipe){
                var notif = document.querySelector("#notifikasi_edit_industri");
                var text_notif = document.querySelector(".add_notifikasi_industri");
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function(res){
                        if(tipe == 'smpn_ind'){
                            var id_industri = res.id_industri;
                            window.location.href = mainUrl+'/industri/edit/'+id_industri;
                        }
                        if(tipe == 'update_thp1'){
                            notif.classList.remove("hide");
                            text_notif.innerHTML = "Berhasil Menyimpan Perubahan Data Industri";
                        }
                        if(tipe == 'update_thp2'){
                            notif.classList.remove("hide");
                            text_notif.innerHTML = "Berhasil Menyimpan Perubahan Data Industri";
                        }
                        if(tipe == 'update_thp3'){
                            notif.classList.remove("hide");
                            text_notif.innerHTML = "Berhasil Menyimpan Perubahan Data Produksi";
                        }
                        if(tipe == 'update_thp4'){
                            notif.classList.remove("hide");
                            text_notif.innerHTML = "Berhasil Menyimpan Perubahan Data Bahan Baku";
                        }
                        if(tipe == 'update_thp5'){
                            notif.classList.remove("hide");
                            text_notif.innerHTML = "Berhasil Menyimpan Perubahan Data Tenaga Kerja";
                        }
                        if(tipe == 'update_thp6'){
                            notif.classList.remove("hide");
                            text_notif.innerHTML = "Berhasil Menyimpan Perubahan Data Pemasaran";
                            window.location.href = mainUrl + "/industri";
                        }
                        if(tipe == 'update_thp7'){
                            notif.classList.remove("hide");
                            text_notif.innerHTML = "Berhasil Menyimpan Perubahan Data Bahan Bakar BBM";
                        }
                        if(tipe == 'update_thp8'){
                            notif.classList.remove("hide");
                            text_notif.innerHTML = "Berhasil Menyimpan Perubahan Data Bahan Bakar Listrik";
                        }
                        if(tipe == 'update_thp9'){
                            notif.classList.remove("hide");
                            text_notif.innerHTML = "Berhasil Menyimpan Perubahan Data Bahan Bakar Gas LPG";
                        }
                        if(tipe == 'update_thp10'){
                            notif.classList.remove("hide");
                            text_notif.innerHTML = "Berhasil Menyimpan Perubahan Data Bahan Bakar Air";
                        }
                    },
                    error: function(err){
                        if(tipe == 'update_thp5'){
                            alert("Periksa Apakah ada Form yang Kosong, Apabila Kosong Isikan dengan 0");
                        }else{
                            alert("Periksa Apakah ada Form yang Kosong, Apabila Kosong Isikan dengan Tanda -");
                        }
                    }
                });
        }



        const inputKecamatan = document.querySelector("#kec_id");

        // variabel value_kec ada di folder industri/itemcruds/crud_thp2.blade.php
        inputKecamatan.addEventListener("change", function (event){
            var val = event.target.value;
            value_kec = val;
            formSelectKelurahan();
        });

        formSelectKelurahan();
        function formSelectKelurahan(){
            $('.select2_kel').select2({
                minimumInputLength: 1,
                allowClear: true,
                placeholder: 'Masukan kelurahan',
                ajax: {
                    dataType: 'json',
                    url: mainUrl+'/getkel/'+value_kec,
                    delay: 800,
                    data: function(params) {
                        return {
                        search: params.term
                        }
                    },
                    processResults: function (data, page) {
                    return {
                        results: data
                    };
                    },
                }
            }).on('select2_kec:select', function (evt) {
                var data = $(".select2_kec option:selected").text();
            });
        }


        const btnChangeKelurahan = document.querySelector(".btn-ganti-kelurahan");
        const areaChangeOwner = document.querySelector("#kelurahan_before_edit");
        const selectKelurahan = document.querySelector(".select-kelurahan");
        const btnCloseKelurahan = document.querySelector(".close-kelurahan");

        const inputThousand = new NumericInput(document.querySelector(".input_numeric1"),"en-CA");
        const inputThousand2 = new NumericInput(document.querySelector(".input_numeric2"),"en-CA");
        const inputThousand3 = new NumericInput(document.querySelector(".input_numeric3"),"en-CA");
        const inputThousand4 = new NumericInput(document.querySelector(".input_numeric4"),"en-CA");
        const inputThousand5 = new NumericInput(document.querySelector(".input_numeric5"),"en-CA");
        const inputThousand6 = new NumericInput(document.querySelector(".input_numeric6"),"en-CA");
        const inputThousand7 = new NumericInput(document.querySelector(".input_numeric7"),"en-CA");
        const inputThousand8 = new NumericInput(document.querySelector(".input_numeric8"),"en-CA");
        const inputThousand9 = new NumericInput(document.querySelector(".input_numeric9"),"en-CA");

        btnChangeKelurahan.addEventListener("click", changeKel);
        btnCloseKelurahan.addEventListener("click",closeSelect2);

        function changeKel(){
            areaChangeOwner.classList.add("hide");
            selectKelurahan.classList.remove("hide");
        }

        function closeSelect2(){
            areaChangeOwner.classList.remove("hide");
            selectKelurahan.classList.add("hide");
        }

        function NumericInput(inp, locale) {
            var numericKeys = '0123456789';

            // restricts input to numeric keys 0-9
            inp.addEventListener('keypress', function(e) {
                var event = e || window.event;
                var target = event.target;

                if (event.charCode == 0) {
                return;
                }

                if (-1 == numericKeys.indexOf(event.key)) {
                // Could notify the user that 0-9 is only acceptable input.
                event.preventDefault();
                return;
                }
            });

            // add the thousands separator when the user blurs
            inp.addEventListener('blur', function(e) {
                var event = e || window.event;
                var target = event.target;

                var tmp = target.value.replace(/,/g, '');
                var val = Number(tmp).toLocaleString(locale);

                if (tmp == '') {
                target.value = '';
                } else {
                target.value = val;
                }
            });

            // strip the thousands separator when the user puts the input in focus.
            inp.addEventListener('focus', function(e) {
                var event = e || window.event;
                var target = event.target;
                var val = target.value.replace(/[,.]/g, '');

                target.value = val;
            });
        }

        const n_pr = document.getElementById("n_pr");
        const n_lk = document.getElementById("n_lk");
        const n_asing = document.getElementById("n_asing");
        const n_total = document.getElementById("n_tenaker");

        n_pr.addEventListener("keyup", function(e){
            const val_npr = e.target.value;
            var val_lk = 0, val_asg = 0, val_total = 0;
            if(n_lk.value === "") val_lk = 0;
            else val_lk = parseInt(n_lk.value);

            if(n_asing === "") val_asg = 0;
            else val_asg = parseInt(n_asing.value);

            val_total = parseInt(val_npr) + val_lk + val_asg;

            n_total.value = val_total;
        });

        n_lk.addEventListener("keyup", function(e){
            const val_nlk = e.target.value;
            var val_pr = 0, val_asg = 0, val_total = 0;
            if(n_pr.value === "") val_pr = 0;
            else val_pr = parseInt(n_pr.value);

            if(n_asing === "") val_asg = 0;
            else val_asg = parseInt(n_asing.value);

            val_total = parseInt(val_nlk) + val_pr + val_asg;

            n_total.value = val_total;
        });

        n_asing.addEventListener("keyup", function(e){
            const val_nasing = e.target.value;
            var val_pr = 0, val_lk = 0, val_total = 0;
            if(n_pr.value === "") val_pr = 0;
            else val_pr = parseInt(n_pr.value);

            if(n_lk === "") val_lk = 0;
            else val_lk = parseInt(n_lk.value);

            val_total = parseInt(val_nasing) + val_pr + val_lk;

            n_total.value = val_total;
        });


    </script>
</body>
</html>