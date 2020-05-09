<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Profile;
use App\Tweet;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();

        foreach( range(1,10) as $index ){
        	DB::table('comments')->insert(array(
        		'content' => $faker->paragraph,
        		'user_id' => $faker->randomElement(Profile::pluck('id')->toArray()),
                'tweet_id' => $faker->randomElement(Tweet::pluck('id')->toArray()),
        	));
        }
    }
}
