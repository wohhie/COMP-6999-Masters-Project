@extends('backend/layouts/starter')

@section('title') 500 @endsection

@section('bodyClass')class="hold-transition skin-blue sidebar-mini"@endsection

@section('contentHeader')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>500 <small>Oops!</small></h1>
  
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">500</li>
  </ol>
</section>
@endsection

@section('content')
<div class="error-page">
  <h2 class="headline text-red">500</h2>
  <div class="error-content">
    <h3><i class="fa fa-warning text-red"></i> Oops! Something went wrong.</h3>
    <p>
      We will work on fixing that right away.
      Meanwhile, you may <a href="index">return to dashboard</a> or try using the search form.
    </p>
    <form class="search-form">
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button type="submit" name="submit" class="btn btn-danger btn-flat"><i class="fa fa-search"></i>
          </button>
        </div>
      </div>
      <!-- /.input-group -->
    </form>
  </div>
</div>
<!-- /.error-page -->
@endsection

@section('scriptIncludes')
<!-- Js -->
 <!-- FastClick -->
 <script src="{{ asset('themes/admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{ asset('themes/admin/dist/js/demo.js') }}"></script>
@endsection