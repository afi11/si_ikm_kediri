<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="{{ url('/') }}">Data Industri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown">
                        {{ Auth::user()->username }} <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <a class="dropdown-item" href="{{ route('logout') }}" 
                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>Logout</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>