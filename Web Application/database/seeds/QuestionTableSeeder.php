<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Question::truncate();

        Question::create([
            'title'     =>  'What is the Observer pattern in Java?',
            'urls'      =>  'https://www.tutorialspoint.com/design_pattern/observer_pattern.htm',
            'keywords'  =>  'Observer Design Pattern, abstract class Observer and a concrete class Subject that is extending class Observer',
            'percent'   =>  65,
            'user_id'   =>  34,
            'course_id' =>  3,
            'exam_id'   =>  3,

        ]);

    }
}
