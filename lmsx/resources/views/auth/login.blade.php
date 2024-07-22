<!DOCTYPE html>
<html>

    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="{{ asset('assets_admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href=" {{ asset('assets_admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/css/customize.css') }}" rel="stylesheet">

    </head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">LMS</h1>

            </div>
            <h3>Welcome to LMSX</h3>
           
            <p>Login in. To see it in action.</p>
            <form method="POST" class="m-t" role="form" action="{{ route('auth.login') }}" >
                @csrf
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Username" > 
                    @if ($errors->has('email'))
                         <span class="error-message"> * {{ $errors->first('email') }}</span>
                    @endif

                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" >
                    @if ($errors->has('password'))s
                        <span class="error-message"> * {{ $errors->first('password') }}</span>
                    @endif

                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('auth.register') }}">Create an account</a>
            </form>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('assets_admin/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/bootstrap.min.js') }}"></script>

</body>

</html>
