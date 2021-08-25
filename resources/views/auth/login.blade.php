<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}" />
    <title>Login</title>
    <style>
        html,
        body {
            height: 100%;
        }
    
        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        </style>
</head>
<body>
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">
                <h3 class="mb-0">Disperindag Kota Kediri</h3>
                <p>Pengelolaan Data Industri</p>
            </div>
            <div class="card-body">
                @if(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ Session::get('error') }}
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input id="username" type="username" class="form-control form-control-lg @error('username') is-invalid @enderror" 
                            name="username" placeholder="Username / Email" value="{{ old('username') }}" required />
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" 
                            name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-3 text-center ">
                &copy;2020 | Disperindag Kota Kediri
            </div>
        </div>
    </div>
  
    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>
</html>