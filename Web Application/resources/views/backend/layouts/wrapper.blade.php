<!DOCTYPE html>
<html>
<head>
  <!-- META -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>@yield('title') - Admin LTE</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   @yield('meta')

  <!-- bootstrap.min.css, font-awesome.min.css, ionicons.min.css, AdminLTE.min.css, _all-skins.min.css -->
  <!-- CSS -->
   <link rel="stylesheet" href="{{ asset('/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{ asset('/adminlte/dist/css/AdminLTE.min.css') }}">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
   <!--
  	 AdminLTE Skins. We have chosen the skin-blue for this starter page.
  	 However, you can choose any other skin.
     Make sure you apply the skin class to the body tag so the changes take effect.
   -->
   <link rel="stylesheet" href="{{ asset('/adminlte/dist/css/skins/_all-skins.min.css') }}">

  @yield('headIncludes')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body @yield('bodyClass')>

  @yield('bodyContent')

  <!-- Scripts -->
  <!-- jQuery 3 -->
  <script src="{{ asset('/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset('/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  @yield('scriptIncludes')

</body>
</html>
