<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model{
    //
    protected $table = 'exams';
    protected $fillable = ['name', 'questions', 'date', 'start', 'end', 'user_id', 'course_id', 'created_at', 'updated_at'];
    public $timestamps = true;
}
