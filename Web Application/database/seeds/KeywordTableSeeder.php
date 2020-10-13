<?php

use Illuminate\Database\Seeder;

class KeywordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        \App\Keyword::truncate();

        \App\Keyword::create([
            'word'  =>  'Observer Design Pattern, Ask Now, Observer design',
            'user_id'   => 1,
            'course_id' => 2,
            'exam_id'   => 2,
            'created_at'    =>  \Carbon\Carbon::now(),
            'updated_at'    =>  \Carbon\Carbon::now(),
        ]);
    }
}
