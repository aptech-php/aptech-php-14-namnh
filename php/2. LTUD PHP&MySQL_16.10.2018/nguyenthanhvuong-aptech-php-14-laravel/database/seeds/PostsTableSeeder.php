<?php

use Illuminate\Database\Seeder;
use App\Post;//thêm dòng này
use Faker\Factory as Faker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        for($i=0;$i<10;$i++){
            $faker = Faker::create();
            DB::table('posts')->insert([
                'title' =>'title thu' .$i,
                'description' =>'description' .$i,
                'content' => $faker->randomHtml(2,3),
                
                
            ]
                
            );
        }

    }
}
