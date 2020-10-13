<?php

use Illuminate\Database\Seeder;

class CourseUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('course_user')->truncate();

        DB::table('course_user')->insert([
            'course_id' =>  3,
            'user_id'   =>  34,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('course_user')->insert([
            'course_id' =>  3,
            'user_id'   =>  28,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('course_user')->insert([
            'course_id' =>  3,
            'user_id'   =>  29,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('course_user')->insert([
            'course_id' =>  3,
            'user_id'   =>  30,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('course_user')->insert([
            'course_id' =>  3,
            'user_id'   =>  31,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
    }
}
