<?php

use App\Role;
use App\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        //$studentRole = Role::where('name', 'student')->first();
        $teacherRole = Role::where('name', 'teacher')->first();

        $faker = Factory::create();
        $limit = 3;
        for ($i = 0; $i < $limit; $i++) {
            $user = User::create([
                'fullname'      =>  $faker->name,
                'mun_id'        =>  rand(100000, 100000000),
                'email'         =>  $faker->unique()->email,
                'password'      =>  bcrypt('1234'),
                'created_at'    =>  Carbon::now(),
                'updated_at'    =>  Carbon::now(),
            ]);

            $user->roles()->attach($teacherRole);

        }
    }
}
