<?php

use Illuminate\Database\Seeder;
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
        // Model User -> table users
        DB::table('users')->insert([
            'name' => 'Nam',
            'email' => 'nam1@autointegrity.com.au',
            'password' => 'daylamatkhau'
        ]);
    }
}
