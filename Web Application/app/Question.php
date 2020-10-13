<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model{
    //
    protected $table = 'questions';
    protected $fillable = ['title', 'urls', 'keywords', 'percent', 'user_id', 'course_id', 'exam_id'];
    public $timestamps = true;

}
