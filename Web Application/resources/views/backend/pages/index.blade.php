
@extends('backend/layouts/starter')

@section('title') Dashboard @endsection

@section('headIncludes')
<!-- CSS -->
 <!-- Morris chart -->
 <link rel="stylesheet" href="{{ asset('/adminlte/bower_components/morris.js/morris.css') }}">
 <!-- datatable style -->
 <link rel="stylesheet" href="{{ asset('/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
 <!-- jvectormap -->
 <link rel="stylesheet" href="{{ asset('/adminlte/bower_components/jvectormap/jquery-jvectormap.css') }}">
 <!-- Date Picker -->
 <link rel="stylesheet" href="{{ asset('/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
 <!-- Daterange picker -->
 <link rel="stylesheet" href="{{ asset('/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
 <!-- bootstrap wysihtml5 - text editor -->
 <link rel="stylesheet" href="{{ asset('/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection

@section('bodyClass')class="hold-transition skin-green sidebar-mini"@endsection

@section('contentHeader')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Dashboard <small>Control</small></h1>

  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  </ol>
</section>
@endsection

@section('content')
  <!-- Dashboard Summery Section -->
  <div class="row">
      <!-- left column -->
      <div class="col-md-12">
          <!-- general form elements -->

          <div class="box box-primary">
              <div class="box-header with-border">
                  <h3 class="box-title">All Courses</h3>
                  <a href="{{ route('courses.create') }}" class="btn btn-primary btn-md btn-right">Create <i class="fa fa-plus"></i></a>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div><br />
              @endif

              <div class="box-body">
                  <table class="table">
                      <thead>
                      <th>SN</th>
                      <th>Registration No</th>
                      <th>Name</th>
                      <th>Action</th>
                      </thead>

                      <tbody>
                      @foreach($courses as $index => $course)
                          <tr>
                              <td>{{ ++$index }}</td>
                              <td><a href="{{ route('courses.show', $course->id) }}">{{ $course->regno }}</a></td>
                              <td>{{ $course->name }}</td>
                              <td>
                                  <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                                  {{--                                        <a href="{{ route('courses.setting', $course->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-gear"></i></a>--}}
                              </td>
                          </tr>
                      @endforeach
                      </tbody>
                  </table>
              </div>


          </div>
          <!-- /.box -->
      </div>
  </div>
@endsection

@section('scriptIncludes')
<!-- JS -->
 <!-- jQuery UI 1.11.4 -->
 <script src="{{ asset('/adminlte/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
 <script>
  $.widget.bridge('uibutton', $.ui.button);
 </script>


<!-- DataTables -->
<script src="{{ asset('/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

 <!-- Morris.js charts -->
 <script src="{{ asset('/adminlte/bower_components/raphael/raphael.min.js') }}"></script>
 <script src="{{ asset('/adminlte/bower_components/morris.js/morris.min.js') }}"></script>

 <!-- Sparkline -->
 <script src="{{ asset('/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>

 <!-- jvectormap -->
 <script src="{{ asset('/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
 <script src="{{ asset('/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

 <!-- jQuery Knob Chart -->
 <script src="{{ asset('/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>

 <!-- daterangepicker -->
 <script src="{{ asset('/adminlte/bower_components/moment/min/moment.min.js') }}"></script>
 <script src="{{ asset('/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

 <!-- datepicker -->
 <script src="{{ asset('/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

 <!-- Bootstrap WYSIHTML5 -->
 <script src="{{ asset('/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

 <!-- Slimscroll -->
 <script src="{{ asset('/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

 <!-- FastClick -->
 <script src="{{ asset('/adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>

 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="{{ asset('/adminlte/dist/js/pages/dashboard.js') }}"></script>

 <!-- AdminLTE for demo purposes -->
 <script src="{{ asset('/adminlte/dist/js/demo.js') }}"></script>

<!-- page script -->
<script>
    $(function () {
        $('#buoyTable').DataTable({
            'paging'      : true,
            'lengthChange': true,
			"pageLength"  : 50,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true,
            "bSort"       : true,
        })
    })


    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
