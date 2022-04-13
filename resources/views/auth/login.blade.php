
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Portal | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/admin/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="/admin/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/admin/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/admin/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/admin/fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/admin/css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/admin/css/style.css">
    <!-- Modernize js -->
    <script src="/admin/js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="/admin/img/logo2.png" alt="logo">
                </div>
                <form method="POST" action="{{ route('login') }}"  class="login-form">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <i class="far fa-envelope"></i>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <i class="fas fa-lock"></i>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Lembrar de mim') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size: 15px;">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                    @endif
                    </div>
                    <div class="form-group align-items-center justify-content-between">
                        <a href="{{route('site.home')}}"><button type="button" class="btn btn-primary btn-lg">Voltar</button></a>
                        <button type="submit" class="btn btn-primary btn-lg">
                            {{ __('Entrar') }}
                        </button>

                    </div>
                </form>
                <div class="login-social">
                    <p>or sign in with</p>
                    <ul>
                        <li><a href="#" class="bg-fb"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="bg-gplus"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" class="bg-git"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="sign-up">Don't have an account ? <a href="#">Signup now!</a></div>
        </div>
    </div>
    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="/admin/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="/admin/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="/admin/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/admin/js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="/admin/js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="/admin/js/main.js"></script>

</body>

</html>
