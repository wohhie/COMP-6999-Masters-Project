@extends('backend.layouts.starter')

@section('title') All Course Settings @endsection
@section('headIncludes')
    <!-- Custom Style -->
@endsection

@section('bodyClass')class="hold-transition skin-green sidebar-mini"@endsection

<!-- content header section -->
@section('contentHeader')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Proctoring Settings <small>proctoring information</small></h1>

        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Proctoring Information</li>
        </ol>
    </section>
@endsection
<!-- content header section -->

@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary custom-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Change Proctoring Rules</h3>
                    <a href="#" class="btn btn-success btn-right" data-toggle="modal" data-target="#add_question">Setting Rules <i class="fa fa-gear"></i></a>

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


                <!-- Blocksite and Searching Keywords Section
                ==========================================================-->
                <div class="box-body">
                    <div class="nav-tabs-custom">
                        <!-- Tabs within a box -->
                        <ul class="nav nav-tabs pull-right" id="myTab">
                            <li class="active"><a href="#blocksite-tab" data-toggle="tab">Setting</a></li>
                            <li><a href="#proctoring-tab" data-toggle="tab">Proctoring Rules</a></li>
                            <li><a href="#student-tab" data-toggle="tab">Active Students</a></li>
                            <li class="pull-left header"><i class="fa fa-inbox"></i> Content Analysis</li>
                        </ul>
                        <div class="tab-content no-padding">
                            <div class="chart tab-pane" id="proctoring-tab">
                                <h3 style="color: crimson"># Proctoring Rules (Block the conent if)</h3>
                                <div class="col-lg-12">
                                    <h4 for="">1. Students try to search with the exam question.</h4>
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
                                        <label class="onoffswitch-label" for="myonoffswitch1">
                                            <div class="onoffswitch-inner"></div>
                                            <div class="onoffswitch-switch"></div>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <h4 for="">2. Traffic content matches with the questions. </h4>
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
                                        <label class="onoffswitch-label" for="myonoffswitch2">
                                            <div class="onoffswitch-inner"></div>
                                            <div class="onoffswitch-switch"></div>
                                        </label>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <h4 for="">3. More than five-question keywords match with the traffic content.   </h4>
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                                        <label class="onoffswitch-label" for="myonoffswitch3">
                                            <div class="onoffswitch-inner"></div>
                                            <div class="onoffswitch-switch"></div>
                                        </label>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <h4 for="">4. Students try to upload or submit the question on internet during exam.</h4>
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch4" checked>
                                        <label class="onoffswitch-label" for="myonoffswitch4">
                                            <div class="onoffswitch-inner"></div>
                                            <div class="onoffswitch-switch"></div>
                                        </label>
                                    </div>
                                </div>


                                <a href="#" class="btn btn-success btn-right" data-toggle="modal" data-target="#add_question">Add New rule <i class="fa fa-plus"></i></a>

                            </div>









                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="blocksite-tab">

                                <!-- Exam Question
                                 ==========================================================-->
                                <div class="box box-primary box-border-none">
                                    <div class="box-header">
                                        <h3 class="box-title">Exam Questions </h3>
                                        <a href="#" class="btn btn-success btn-right" data-toggle="modal" data-target="#add_question">New Question <i class="fa fa-plus"></i></a>
                                        <a href="#" class="btn btn-success btn-right" data-toggle="modal" data-target="#add_question">Upload Question <i class="fa fa-upload"></i></a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="add_question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <form method="post" action="{{ route('questions.store') }}">
                                                @csrf
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="title">Question</label>
                                                                        <textarea class="form-control" id="title" name="title">Enter Question</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row hide">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="url">Specific URLs <i class="small">(separate with commas)</i></label>
                                                                        <textarea type="text" class="form-control" id="urls" name="urls"  placeholder="Enter Specific URLs">http:www.com</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="url">Specific Keywords/Sentences <i class="small">(separate with commas)</i></label>
                                                                        <textarea type="text" class="form-control" id="keywords" name="keywords" placeholder="Enter Keywords/Sentence"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="row hide">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="url">Matching Percent </label>
                                                                        <input type="number" class="form-control" id="percent" name="percent" value="30" placeholder="How many percent answer can match">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="course_id" id="course_id" value="{{ $courseID }}">
                                                            <input type="hidden" name="exam_id" id="exam_id" value="{{ $examID }}">

                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="box-body no-padding">
                                        <table class="table table-responsive table-striped table-hover">
                                            <thead>
                                            <th>SN</th>
                                            <th>Questions</th>
                                            <th>keywords / Sentences</th>
                                            <th>Action</th>
                                            </thead>

                                            <tbody id="keyword_list">
                                            @foreach($questions as $index => $question)
                                                <tr>
                                                    <td>{{ ++$index }}</td>
                                                    <td>{{ $question->title }} <br> <h5><a href="#"> display sample code</a></h5></td>
                                                    <td>{{ $question->keywords }} </td>
                                                    <td>
                                                            <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-1" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                                                            <form action="{{ route('questions.destroy', $question->id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-xs" type="submit" ><i class="fa fa-remove"></i></button>
                                                            </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>


{{--                                        <form method="post" action="{{ route('keyword.store') }}">--}}
{{--                                            @csrf--}}


{{--                                            <input type="hidden" name="course_id" id="course_id" value="{{ $courseID }}">--}}
{{--                                            <input type="hidden" name="exam_id" id="exam_id" value="{{ $examID }}">--}}
{{--                                            <input type="submit" class="btn btn-success btn-right" name="submit" id="btn-keyword" value="Submit">--}}
{{--                                        </form>--}}
                                    </div>
                                </div>





                                <!-- Blocksite Section
                                 ==========================================================-->
                                <div class="box box-primary box-border-none">
                                    <div class="box-header">
                                        <h3 class="block-title">Blocked Sites/URL list</h3>
                                        <a href="javascript:void(0);" class="btn btn-success btn-right" id="add_url">Add a new site/url <i class="fa fa-plus"></i></a>
                                    </div>
                                    <div class="box-body no-padding">
                                        <form method="post" action="{{ route('blocksite.store') }}">
                                            @csrf
                                            <table class="table table-responsive table-striped table-hover" id="table_blocklist">
                                                <thead>
                                                <th>SN</th>
                                                <th>Site Name</th>
                                                <th>Site URL</th>
                                                <th>Action</th>
                                                </thead>

                                                <tbody id="block_sites">
                                                @foreach($blocksites as $index => $blocksite)
                                                    <tr>
                                                        <td>{{ ++$index }}</td>
                                                        <td>{{ $blocksite->name }}</td>
                                                        <td><a href="{{ $blocksite->url }}">{{ $blocksite->url }}</a></td>
                                                        <td>
                                                            <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-{{$blocksite->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>


                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                            <input type="hidden" name="course_id" id="course_id" value="{{ $courseID }}">
                                            <input type="hidden" name="exam_id" id="exam_id" value="{{ $examID }}">
                                            <input type="submit" class="btn btn-success btn-right" name="submit" id="btn-blocksite" value="Submit">
                                        </form>
                                    </div>
                                </div>

                                <!-- Keyword Section
                                 ==========================================================-->
                                <div class="box box-primary box-border-none">
                                    <div class="box-header">
                                        <h3 class="box-title">Searching Keywords </h3>
                                        <a href="javascript:void(0);" class="btn btn-success btn-right" id="add_keyword">New Keywords <i class="fa fa-plus"></i></a>
                                    </div>
                                    <div class="box-body no-padding">
                                        <form method="post" action="{{ route('keyword.store') }}">
                                            @csrf
                                            <table class="table table-responsive table-striped table-hover">
                                                <thead>
                                                <th>SN</th>
                                                <th>Word</th>
                                                <th>Action</th>
                                                </thead>

                                                <tbody id="keyword_list">
                                                @foreach($keywords as $index => $word)
                                                    <tr>
                                                        <td>{{ ++$index }}</td>
                                                        <td>{{ $word->word }}</td>
                                                        <td>
                                                            <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-{{$blocksite->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>


                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                            <input type="hidden" name="course_id" id="course_id" value="{{ $courseID }}">
                                            <input type="hidden" name="exam_id" id="exam_id" value="{{ $examID }}">
                                            <input type="submit" class="btn btn-success btn-right" name="submit" id="btn-keyword" value="Submit">
                                        </form>
                                    </div>
                                </div>



                            </div>

                            <!-- student information -->
                            <div class="chart tab-pane" id="student-tab" style="position: relative; height: 300px;">
                                <table class="table table-responsive table-striped table-hover">
                                    <thead>
                                    <th>SN</th>
                                    <th>Mun ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Private IP</th>
                                    <th>VPN IP</th>
                                    <th>Active Interface</th>
                                    <th>OS Type</th>
                                    <th>PC Name</th>
                                    <th>Mac Address</th>
                                    <th>Connected Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </thead>

                                    <tbody id="keyword_list">
                                    @foreach($students as $index => $student)
                                        @if ($student->active['status'])
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $student->mun_id }}</td>
                                                <td>{{ $student->fullname }}</td>
                                                <td>{{ $student->email }}</td>
                                                <td>{{ $student->network->private_ip }}</td>
                                                <td>{{ $student->network->vpn_ip }}</td>
                                                <td>{{ $student->network->active_interface }}</td>
                                                <td>{{ $student->network->os_type }}</td>
                                                <td>{{ $student->network->pc_name }}</td>
                                                <td>{{ $student->network->mac_address }}</td>
                                                <td>{{ $student->network->created_at }}</td>
                                                <td>
                                                    <i class="fa fa-circle clrgreen"></i>

                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        @endif

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.box -->
        </div>
    </div>


@endsection

@section('scriptIncludes')

    <script type="text/javascript">
        $(document).ready(function(){


            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            if(activeTab){
                $('#myTab a[href="' + activeTab + '"]').tab('show');
            }


            $("#btn-keyword").css("display", "none")
            $("#btn-blocksite").css("display", "none")

            // Add new member section
            $(document).on('click', '#add_url', function(){
                var html = '';
                html += '<tr>';
                html += "<td></td>";
                html += '<td><input type="text" name="name[]" placeholder="Enter Site Name" class="form-control" /></td>';
                html += '<td><input type="text" name="url[]" placeholder="Enter Site URL" class="form-control" /></td>';
                html += '<td><button type="button" name="remove" class="btn btn-danger btn-xs remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
                $('#table_blocklist').append(html);

                $('#btn-blocksite').css("display", "block")
            });
            $(document).on('click', '.remove', function(){
                $(this).closest('tr').remove();
            });



            //          ADDING NEW KEYWORDS
            // =================================================
            $(document).on('click', '#add_keyword', function(){
                var html = '';
                html += '<tr>';
                html += "<td></td>";
                html += '<td><input type="text" name="word[]" placeholder="Enter searching keywords" class="form-control" /></td>';
                html += '<td><button type="button" name="remove" class="btn btn-danger btn-xs remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
                $('#keyword_list').append(html);

                $('#btn-keyword').css("display", "block")
            });
            $(document).on('click', '.remove', function(){
                $(this).closest('tr').remove();
            });
        })
    </script>
@endsection
