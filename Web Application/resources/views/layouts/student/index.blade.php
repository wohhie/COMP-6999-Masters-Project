@extends('backend.layouts.starter')

@section('title') All Students @endsection
@section('headIncludes')
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
@endsection

@section('bodyClass')class="hold-transition skin-green sidebar-mini"@endsection

<!-- content header section -->
@section('contentHeader')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Courses <small>all students information</small></h1>

        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Student Information</li>
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
                    <h3 class="box-title">All Students</h3>
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
                        <th>MUN ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                        </thead>

                        <tbody>
                        @foreach($students as $index => $student)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td><a href="{{ route('students.show', $student->id) }}">{{ $student->mun_id }}</a></td>
                                <td>{{ $student->fullname }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->roles[0]->name }}</td>
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


@endsection
