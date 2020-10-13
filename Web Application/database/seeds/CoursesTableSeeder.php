<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //

        \App\Course::truncate();

        \App\Course::create([
            'name'  =>  'Machine Learning',
            'regno' =>  '9084',
            'user_id'   =>  1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        \App\Course::create([
            'name'          =>  'Computer Visualization',
            'regno'         =>  '9086',
            'user_id'       =>  1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

    }

}
