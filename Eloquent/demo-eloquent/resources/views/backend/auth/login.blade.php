{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<form method="post">--}}
{{--    @csrf--}}
{{--    <h3>Đăng nhập</h3>--}}
{{--<input type="email" name="email" placeholder="Nhập email">--}}
{{--<input type="password" name="password" placeholder="Nhập Password">--}}
{{--    <button type="submit">Đăng nhập</button>--}}
{{--    <a href="{{route("users.create")}}">Quay lại</a>--}}

{{--</form>--}}
{{--</body>--}}
{{--</html>--}}


{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}

{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="description" content="">--}}
{{--    <meta name="author" content="">--}}

{{--    <title>SB Admin 2 - Login</title>--}}

{{--    <!-- Custom fonts for this template-->--}}
{{--    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">--}}
{{--    <link--}}
{{--        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"--}}
{{--        rel="stylesheet">--}}

{{--    <!-- Custom styles for this template-->--}}
{{--    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">--}}
{{--    @toastr_css--}}
{{--</head>--}}

{{--<body class="bg-gradient-primary">--}}

{{--<div class="container">--}}

{{--    <!-- Outer Row -->--}}
{{--    <div class="row justify-content-center">--}}

{{--        <div class="col-xl-10 col-lg-12 col-md-9">--}}

{{--            <div class="card o-hidden border-0 shadow-lg my-5">--}}
{{--                <div class="card-body p-0">--}}
{{--                    <!-- Nested Row within Card Body -->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="p-5">--}}
{{--                                <div class="text-center">--}}
{{--                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>--}}
{{--                                </div>--}}
{{--                                <form action="{{ route('login') }}"  method="post">--}}
{{--                                     @csrf--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input name="email" type="email" class="form-control form-control-user"--}}
{{--                                               id="exampleInputEmail" aria-describedby="emailHelp"--}}
{{--                                               placeholder="Enter Email Address...">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input name="password" type="password" class="form-control form-control-user"--}}
{{--                                               id="exampleInputPassword" placeholder="Password">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class="custom-control custom-checkbox small">--}}
{{--                                            <input type="checkbox" class="custom-control-input" id="customCheck">--}}
{{--                                            <label class="custom-control-label" for="customCheck">Remember--}}
{{--                                                Me</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <button type="submit" class="btn btn-primary btn-user btn-block">--}}
{{--                                        Login--}}
{{--                                    </button>--}}
{{--                                    <hr>--}}
{{--                                    <a href="index.html" class="btn btn-google btn-user btn-block">--}}
{{--                                        <i class="fab fa-google fa-fw"></i> Login with Google--}}
{{--                                    </a>--}}
{{--                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">--}}
{{--                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook--}}
{{--                                    </a>--}}
{{--                                </form>--}}
{{--                                <hr>--}}
{{--                                <div class="text-center">--}}
{{--                                    <a class="small" href="forgot-password.html">Forgot Password?</a>--}}
{{--                                </div>--}}
{{--                                <div class="text-center">--}}
{{--                                    <a class="small" href="register.html">Create an Account!</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}

{{--<!-- Bootstrap core JavaScript-->--}}
{{--<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>--}}

{{--<!-- Core plugin JavaScript-->--}}
{{--<script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>--}}

{{--<!-- Custom scripts for all pages-->--}}
{{--<script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>--}}

{{--</body>--}}
{{--@jquery--}}
{{--@toastr_js--}}
{{--@toastr_render--}}
{{--</html>--}}


    <!DOCTYPE html>
<html>

<head>
    <title>My Awesome Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @toastr_css
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="https://www.nicepng.com/png/full/232-2326770_icon-blogger-logo-now-creative-group-logo.png" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control input_user"  value="" placeholder="Email">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password"  class="form-control input_pass"  value="" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline" style="color: #9faab3">Remember me</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn">Login</button>
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links">
{{--                    Don't have an account? --}}
                    <a href="#" class="ml-2" style="color: #a9d2f3">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center links" >
                    <a style="color: #77a3cf" href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@jquery
@toastr_js
@toastr_render
</html>



