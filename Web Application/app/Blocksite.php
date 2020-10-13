<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blocksite extends Model{
    //

    protected $table = "blocksites";
    protected $fillable = ['name', 'url', 'user_id', 'course_id', 'exam_id'];
    public $timestamps = true;
}
