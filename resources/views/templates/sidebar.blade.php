<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link @if(Request::segment(1) == 'dashboard') active @endif" href="{{ url('dashboard') }}"><i class="m-r-10 mdi mdi-view-dashboard"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                    @if(Auth::user()->tipe_akun == 'adm')
                    <li class="nav-item">
                        <a class="nav-link @if(Request::segment(1) == 'user') active @endif" href="{{ url('user') }}"><i class="fas fa-fw fa-user-circle"></i>Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::segment(1) == 'badan_usaha') active @endif" href="{{ url('badan_usaha') }}"><i class="m-r-10 mdi mdi-archive"></i>Badan Usaha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::segment(1) == 'industri') active @endif" href="{{ url("industri") }}"><i class="fas fa-fw fa-truck"></i>Industri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2"><i class="fas fa-fw fa-cog"></i>Pengaturan</a>
                        <div id="submenu-1-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link @if(Request::segment(1) == 'kecamatan') active @endif" href="{{ url('kecamatan') }}"><i class="m-r-10 mdi mdi-map-marker"></i></i>Kecamatan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(Request::segment(1) == 'recover_data') active @endif" href="{{ url('recover_data') }}"><i class="fas fa-fw fa-trash"></i>Trash</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>