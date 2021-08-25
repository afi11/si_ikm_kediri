<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cek Data Industri Kota Kediri</title>
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
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables-bs4/css/dataTables.bootstrap4.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables-bs4/css/responsive.bootstrap4.min.css') }}" />
</head>
<style>
    body {
        overflow-x: hidden;
    }
</style>
<body class="bg-light">
    <div class="dashboard-main-wrapper">
        @include('home.navbar')
        @include('home.content')
    </div>

    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    {{-- Datatable --}}
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <script>
        var mainUrl = '{{ url("") }}';

        $(function(){
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                sDom: 'lrtip',
                bLengthChange: false,
                ajax: {
                    url: mainUrl+'/',
                    data: function(d){
                        d.nama_produk = $('#nama_produk').val(),
                        d.search = $('input[type="search"]').val()
                    }
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'nama_perusahaan', name: 'nama_perusahaan'},
                    {data: 'nama_produk', name:'nama_produk'},
                    {data: 'pemilik', name:'pemilik'},
                    {data: 'jalan', name: 'jalan'},
                    {data: 'kelurahan', name: 'kelurahan'},
                    {data: 'kecamatan', name: 'kecamatan'},
                    {data: 'status_pm', name:'status_pm'},
                    {data: 'klasifikasi', name:'klasifikasi'},
                ],
                responsive: true
            });

            $('#nama_produk').keyup(function(){
                table.draw();
            });
        });

    </script>
</body>
</html>