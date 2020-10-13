@extends('backend/layouts/starter')

@section('title') Collapsed Sidebar @endsection

@section('bodyClass')class="hold-transition skin-blue sidebar-mini sidebar-collapse"@endsection

@section('contentHeader')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Collapsed Sidebar <small>Preview...</small></h1>
  
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Collapsed Sidebar</li>
  </ol>
</section>
@endsection

@section('content')      
<div class="callout callout-info">
  <h4>Tip!</h4>

  <p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with a
    fixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretched
    vertically.</p>
</div>
<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Title</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
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
@endsection