<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
    $faker = faker::create('id_ID');
        for($i = 1;$i <= 10;$i++)
        {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->name."@gmail.com",
                'password' => bcrypt($faker->name),
            ]);
        }
    }
}
