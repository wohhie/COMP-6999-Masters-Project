<?php

namespace App\Http\Controllers;

use App\Blocksite;
use App\Course;
use App\Exam;
use App\Keyword;
use App\Question;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $courses = Course::where('user_id', Auth::user()->id)->get();

        return view('layouts.courses.index', compact(['courses', 'blocksites']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
        return view('layouts.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        Course::create($request->all());
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $course_id = $id;

        $course = Course::find($id);
        $students = $course->users;

        $blocksites = Blocksite::where('course_id', $id);
        $exams = Exam::where('course_id', '=', $id)->get();

        return view('layouts.courses.show', compact('course', 'blocksites', 'exams', 'course_id', 'students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }



    public function setting(Request $request){
        $courseID = $request->id;
        $examID = $request->examid;


        $course = Course::find($courseID);
        $active_students = [];
        $students = $course->users;

        // get all the questions
        $questions = Question::where('course_id', $courseID)
            ->where('exam_id', $examID)
            ->where('user_id', Auth::user()->id)
            ->get();



        $keywords = Keyword::where('course_id', $courseID)
            ->where('exam_id', $examID)
            ->where('user_id', Auth::user()->id)
            ->get();


        $blocksites = Blocksite::where('course_id', $courseID)
            ->where('exam_id', $examID)
            ->get();

        return view('layouts.courses.setting',
            compact(
                'blocksites',
                'courseID',
                'examID',
                'keywords',
                'students',
                'questions'
            ));
    }
}
