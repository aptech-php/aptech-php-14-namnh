<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for ($i = 0; $i < 5; $i++) {
            // DB::table('users')->insert
            User::create([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'password' => bcrypt('123456')
            ]);
        }
    }
}
