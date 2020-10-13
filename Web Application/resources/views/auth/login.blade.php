@extends('backend/layouts/wrapper')
@section('title') Log in @endsection
@section('headIncludes')
    <!-- CSS -->
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admitlte/plugins/iCheck/square/blue.css') }}">
@endsection
@section('bodyClass')class="hold-transition login-page"@endsection
@section('bodyContent')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><h1>Proctor Application</h1></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group has-feedback">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror


                <div class="form-group has-feedback">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                @error('password')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror

                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Sign In') }}</button>
                    </div>

                    <!-- /.col -->
                </div>
            </form>

            <!-- /.social-auth-links -->
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
    <!-- /.login-box-body -->
@endsection
@section('scriptIncludes')
    <!-- Js -->
    <!-- iCheck -->
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('themes/admin/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });



        // $('form').validator({
        //     // the delay in milliseoncds
        //     delay: 500,
        //
        //     // allows html inside the error messages
        //     html: false,
        //
        //     // disable submit button if there's invalid form
        //     disable: true,
        //
        //     // <a href="https://www.jqueryscript.net/tags.php?/Scroll/">Scroll</a> to and focus the first field with an error upon validation of the form.
        //     focus: true,
        //
        //     // define your custom validation rules
        //     custom: {},
        //
        //     // default errof messages
        //     errors: {
        //         match: 'Does not match',
        //         minlength: 'Not long enough'
        //     },
        //
        //     // feedback CSS classes
        //     feedback: {
        //         success: 'glyphicon-ok',
        //         error: 'glyphicon-remove'
        //     }
        //
        // })
    </script>
@endsection
