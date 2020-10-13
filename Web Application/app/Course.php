<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model{
    //
    protected $fillable = ['name', 'regno', 'user_id'];
    public $timestamps = true;
    protected $table = 'courses';



    public function users(){
        return $this->belongsToMany(User::class, 'course_user');
    }
}
