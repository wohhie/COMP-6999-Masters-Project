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
                    <h3 class="box-title">{{ $course->regno }} - {{ $course->name }}</h3>
                    <a href="#" class="btn btn-primary btn-right" data-toggle="modal" data-target=".bs-example-modal-sm">Create Exam <i class="fa fa-plus"></i></a>


                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog modal-md" role="document">
                            <form action="{{ route('exams.store') }}" method="post">
                                @csrf

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Create Exam</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Exam Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="date">Date</label>
                                                    <input type="text" class="form-control" id="date" name="date" placeholder="Date">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="question">Question</label>
                                                    <input type="text" class="form-control" id="questions" name="questions" placeholder="Enter Question">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="start">End Time</label>
                                                    <input type="text" class="form-control" id="start" name="start" placeholder="Start Time">
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="end">End Time</label>
                                                    <input type="text" class="form-control" id="end" name="end" placeholder="End Time">
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="course_id" value="{{ $course_id }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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

                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#exams" data-toggle="tab"><i class="fa fa-sticky-note"></i> Exams</a></li>
                        <li><a href="#students" data-toggle="tab"><i class="fa fa-user"></i>  Students</a></li>
                        <li class="pull-left header"><i class="fa fa-inbox"></i> Course: {{ $course->regno }} - {{ $course->name }}</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="exams">
                            <table class="table table-responsive table-hover">
                                <thead>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Action</th>
                                </thead>

                                <tbody>
                                @foreach($exams as $index => $exam)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td><a href="{{ route('courses.setting', ['id' => $course->id, 'examid' => $exam->id]) }}">{{ $exam->name }}</a></td>
                                        <td>{{ $exam->date }}</td>
                                        <td>{{ $exam->start }}</td>
                                        <td>{{ $exam->end }}</td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                                            <a href="{{ route('courses.setting', ['id' => $course->id, 'examid' => $exam->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-gear"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="chart tab-pane" id="students">
                            <table class="table table-responsive table-hover">
                                <thead>
                                <th>SN</th>
                                <th>Mun ID</th>
                                <th>Fullname</th>
                                <th>Email Address</th>
                                <th>Action</th>
                                </thead>

                                <tbody>
                                @foreach($students as $index => $student)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td><a href="#">{{ $student->mun_id }}</a></td>
                                        <td>{{ $student->fullname }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                                            <a href="" class="btn btn-primary btn-xs"><i class="fa fa-gear"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="box-body">

                </div>


            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('scriptIncludes')


@endsection









{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-12">--}}
{{--                <h2>Course Information</h2>--}}
{{--                <table class="table">--}}
{{--                    <thead>--}}
{{--                    <th>Registration No</th>--}}
{{--                    <th>Name</th>--}}
{{--                    </thead>--}}

{{--                    <tbody>--}}
{{--                        <td>{{ $course->regno }}</td>--}}
{{--                        <td>{{ $course->name }}</td>--}}
{{--                    </tbody>--}}
{{--                </table>--}}


{{--                <section id="tabs" class="project-tab">--}}
{{--                    <nav>--}}
{{--                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">--}}
{{--                            <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Exam Rules</a>--}}
{{--                            <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Block Site/URL</a>--}}
{{--                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"></a>--}}
{{--                        </div>--}}
{{--                    </nav>--}}
{{--                    <div class="tab-content" id="nav-tabContent">--}}
{{--                        <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">--}}
{{--                            <h4>Exam Rules</h4>--}}
{{--                            <table class="table table-bordered" id="item_table">--}}

{{--                            </table>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade  show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">--}}
{{--                            <div class="custom-block">--}}
{{--                                <h4>Block Site Information</h4>--}}



{{--                                <form action="{{ route('blocksite.store') }}" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    <table class="table table-bordered">--}}
{{--                                        <thead>--}}
{{--                                            <tr>--}}
{{--                                                <th>Website Name</th>--}}
{{--                                                <th>URL</th>--}}
{{--                                                <th>Action</th>--}}
{{--                                                --}}{{--<th><button type="button" name="add" class="btn btn-success btn-sm add">+</button></th>--}}
{{--                                            </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                            @foreach($blocksites as $index => $blocksite)--}}
{{--                                                <tr>--}}
{{--                                                    <td>{{ $blocksite->name }}</td>--}}
{{--                                                    <td>{{ $blocksite->url }}</td>--}}
{{--                                                    <td></td>--}}
{{--                                                </tr>--}}
{{--                                            @endforeach--}}
{{--                                            <tr>--}}
{{--                                                <td><input type="text" id="name" name="name" class="form-control" /></td>--}}
{{--                                                <td><input type="text" id="url" name="url" class="form-control" /></td>--}}
{{--                                                <td class="hide"><input type="hidden" id="user_id" name="user_id" class="form-control" value="1" /></td>--}}
{{--                                                <td class="hide"><input type="hidden" id="course_id" name="course_id" class="form-control" value="{{ $course->id }}" /></td>--}}
{{--                                                <td><button type="submit" name="submit" class="btn btn-success btn-sm remove">Submit</button></td>--}}
{{--                                            </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">--}}
{{--                            <table class="table" id="block-table" cellspacing="0">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Contest Name</th>--}}
{{--                                    <th>Date</th>--}}
{{--                                    <th>Award Position</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td><a href="#">Work 1</a></td>--}}
{{--                                    <td>Doe</td>--}}
{{--                                    <td>john@example.com</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td><a href="#">Work 2</a></td>--}}
{{--                                    <td>Moe</td>--}}
{{--                                    <td>mary@example.com</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td><a href="#">Work 3</a></td>--}}
{{--                                    <td>Dooley</td>--}}
{{--                                    <td>july@example.com</td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



{{--@endsection--}}
