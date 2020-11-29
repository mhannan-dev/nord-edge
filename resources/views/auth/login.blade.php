
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{ URL::asset('backend/login')}}/favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ URL::asset('backend/login')}}/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ URL::asset('backend/login')}}/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="{{ URL::asset('backend/login')}}/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ URL::asset('backend/login')}}/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="{{ URL::asset('backend/login')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="{{ URL::asset('backend/login')}}/dist/css/theme.min.css">
        <script src="{{ URL::asset('backend/login')}}/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
       
        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        
                        <div class="lavalite-bg" style="background-image: url({{asset('backend/login/img/auth/login-bg.jpg')}})">
                        
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="../index.html"><img src="../src/img/brand.svg" alt=""></a>
                            </div>
                            <h3>Sign In</h3>
                            <p>Happy to see you again!</p>
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group">
                                    
                                    <input id="mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <span class="custom-control-label">&nbsp;Remember Me</span>
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <a href="forgot-password.html">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <button class="btn btn-theme">Sign In</button>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="{{ URL::asset('backend/login')}}/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="{{ URL::asset('backend/login')}}/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="{{ URL::asset('backend/login')}}/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="{{ URL::asset('backend/login')}}/plugins/screenfull/dist/screenfull.js"></script>
        <script src="{{ URL::asset('backend/login')}}/dist/js/theme.js"></script>
       
    </body>
</html>
