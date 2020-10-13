@extends('backend/layouts/starter')

@section('title') Text Editors @endsection

@section('headIncludes')
<!-- CSS -->
 <!-- bootstrap wysihtml5 - text editor -->
 <link rel="stylesheet" href="{{ asset('themes/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection

@section('bodyClass')class="hold-transition skin-blue sidebar-mini"@endsection

@section('contentHeader')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Editors <small>Preview...</small></h1>
  
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Editors</li>
  </ol>
</section>
@endsection

@section('content')      
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">CK Editor
          <small>Advanced and full of features</small>
        </h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body pad">
        <form>
            <textarea id="editor1" name="editor1" rows="10" cols="80">This is my textarea to be replaced with CKEditor.</textarea>
        </form>
      </div>
    </div>
    <!-- /.box -->

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Bootstrap WYSIHTML5
          <small>Simple and fast</small>
        </h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body pad">
        <form>
          <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </form>
      </div>
    </div>
  </div>
  <!-- /.col-->
</div>
<!-- ./row -->
@endsection

@section('scriptIncludes')
<!-- Js -->
 <!-- FastClick -->
 <script src="{{ asset('themes/admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{ asset('themes/admin/dist/js/demo.js') }}"></script>
 <!-- CK Editor -->
 <script src="{{ asset('themes/admin/bower_components/ckeditor/ckeditor.js') }}"></script>
 <!-- Bootstrap WYSIHTML5 -->
 <script src="{{ asset('themes/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
 <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
 </script>
@endsection