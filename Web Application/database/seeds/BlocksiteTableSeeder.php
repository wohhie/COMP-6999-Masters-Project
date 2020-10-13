<?php

use Illuminate\Database\Seeder;

class BlocksiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        \App\Blocksite::truncate();

        \App\Blocksite::create([
            'name'  =>  'facebook',
            'url'  =>  'www.facebook.com',
            'user_id'   =>  1,
            'course_id' =>  2,
            'exam_id'   =>  1,
            'created_at'    =>  \Carbon\Carbon::now(),
            'updated_at'    =>  \Carbon\Carbon::now(),
        ]);


        \App\Blocksite::create([
            'name'  =>  'github',
            'url'  =>  'www.github.com',
            'user_id'   =>  1,
            'course_id' =>  2,
            'exam_id'   =>  1,
            'created_at'    =>  \Carbon\Carbon::now(),
            'updated_at'    =>  \Carbon\Carbon::now(),
        ]);

    }
}
