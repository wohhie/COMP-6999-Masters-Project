@extends('backend/layouts/starter')

@section('title') Blank @endsection

@section('bodyClass')class="hold-transition skin-blue sidebar-mini"@endsection

@section('contentHeader')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Blank Page <small>Preview...</small></h1>
  
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Blank</li>
  </ol>
</section>
@endsection

@section('content')      
<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Title</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
              title="Collapse">
        <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
    Start creating your amazing application!
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    Footer
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->
@endsection

@section('scriptIncludes')
<!-- Js -->
<!-- SlimScroll -->
<script src="{{ asset('themes/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('themes/admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('themes/admin/dist/js/demo.js') }}"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
@endsection