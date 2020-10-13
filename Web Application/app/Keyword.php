<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model{
    //
    protected $table = 'keywords';
    protected $fillable = ['word', 'course_id', 'user_id', 'exam_id'];
    public $timestamps = true;

}
