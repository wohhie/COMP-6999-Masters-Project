@extends('backend/layouts/starter')

@section('title') Pace Page @endsection

@section('headIncludes')
<!-- CSS -->
 <!-- Pace style -->
 <link rel="stylesheet" href="{{ asset('themes/admin/plugins/pace/pace.min.css') }}">
@endsection

@section('bodyClass')class="hold-transition skin-blue sidebar-mini"@endsection

@section('contentHeader')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Pace Page <small>Preview...</small></h1>
  
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Pace Page</li>
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
    Pace loading works automatically on page. You can still implement it with ajax requests by adding this js:
    <br/><code>$(document).ajaxStart(function() { Pace.restart(); });</code>
    <br/>
    <div class="row">
      <div class="col-xs-12 text-center">
        <button type="button" class="btn btn-default btn-lrg ajax" title="Ajax Request">
          <i class="fa fa-spin fa-refresh"></i>&nbsp; Get External Content
        </button>
      </div>
    </div>
    <div class="ajax-content">
    </div>
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
 <!-- PACE -->
 <script src="{{ asset('themes/admin/bower_components/PACE/pace.min.js') }}"></script>
 <!-- SlimScroll -->
 <script src="{{ asset('themes/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
 <!-- FastClick -->
 <script src="{{ asset('themes/admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{ asset('themes/admin/dist/js/demo.js') }}"></script>
 <!-- page script -->
 <script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })
  })
 </script>
@endsection