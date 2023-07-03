<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('loginassets/images/icons/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginassets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginassets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginassets/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginassets/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginassets/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginassets/css/main.css') }}">
</head>
<body>
    
    <div class="limiter">
        @if(Session::has('status'))
            <div class="alert alert-error" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('loginassets/images/img-01.png') }}" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('store') }}">
                    @csrf
                    <span class="login100-form-title">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <input class="input100" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Confirmation password is required">
                        <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Register
                        </button>
                    </div>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <div class="text-center p-t-20">
                        <span class="txt1">
                            Already have an account?
                        </span>
                        <a class="txt2" href="{{ route('login') }}">
                            Login here
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('loginassets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('loginassets/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('loginassets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('loginassets/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('loginassets/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        });
    </script>
    <script src="{{ asset('loginassets/js/main.js') }}"></script>

</body>
</html>
