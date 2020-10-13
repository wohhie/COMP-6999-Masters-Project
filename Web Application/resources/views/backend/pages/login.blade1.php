@extends('backend/layouts/wrapper')

@section('title') Log in @endsection

@section('headIncludes')
<!-- CSS -->
 <!-- iCheck -->
 <link rel="stylesheet" href="{{ asset('themes/admin/plugins/iCheck/square/blue.css') }}">
@endsection

@section('bodyClass')class="hold-transition login-page"@endsection

@section('bodyContent')
<div class="login-box">
  <div class="login-logo">
    <a href="index2"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="../../index2" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <a href="#">I forgot my password</a><br>
    </div>
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection

@section('scriptIncludes')
<!-- Js -->
 <!-- iCheck -->
 <script src="{{ asset('themes/admin/plugins/iCheck/icheck.min.js') }}"></script>
 <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
 </script>
@endsection