@extends('backend.layouts.starter')

@section('title') All Courses @endsection
@section('headIncludes')
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
@endsection

@section('bodyClass')class="hold-transition skin-green sidebar-mini"@endsection

<!-- content header section -->
@section('contentHeader')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Courses <small>all course information</small></h1>

        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Course Information</li>
        </ol>
    </section>
@endsection
<!-- content header section -->

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Course</h3>
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
                    <form role="form" method="post" action="{{ route('courses.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Reg No</label>
                                    <input type="text" class="form-control" readonly id="regno" name="regno" value="{{ rand(1000, 9999) }}" placeholder="Enter Course Reg No">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Course Name">
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">


                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('scriptIncludes')


@endsection
