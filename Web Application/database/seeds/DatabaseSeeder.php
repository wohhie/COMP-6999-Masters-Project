<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(KeywordTableSeeder::class);
//         $this->call(RolesTableSeeder::class);
//         $this->call(CoursesTableSeeder::class);
//         $this->call(UsersTableSeeder::class);
//         $this->call(TeachersTableSeeder::class);
         $this->call(QuestionTableSeeder::class);
    }
}
