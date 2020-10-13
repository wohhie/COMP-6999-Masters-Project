<?php


use Illuminate\Database\Seeder;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        \App\Exam::truncate();

        \App\Exam::create([
            'name'  =>  'Mid Term',
            'questions'  => null,
            'date'  =>  date('Y-m-d'),
            'start' =>  date ("Y-m-d H:i:s", strtotime("10:00")),
            'end' =>  date ("Y-m-d H:i:s", strtotime("11:00")),
            'user_id'   => 1,
            'course_id' => 2,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),

        ]);


        \App\Exam::create([
            'name'  =>  'Final Term',
            'questions'  => null,
            'date'  =>  date('Y-m-d'),
            'start' =>  date ("Y-m-d H:i:s", strtotime("11:00")),
            'end' =>  date ("Y-m-d H:i:s", strtotime("12:00")),
            'user_id'   => 1,
            'course_id' => 2,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),

        ]);
    }
}
