<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Profile;
use App\User;

class TweetsTableSeeder extends Seeder
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

        foreach(range(1, 40 ) as $index){
            DB::table( 'tweets')->insert(array(
                'message' => $faker->paragraph,
                'photo' => $faker->imageURL($width = 600, $height = 480),
                'user_id' => $faker->randomElement(User::pluck( 'id' )->toArray()), 
                'likes_count' => $faker->randomDigitNotNull,
                'posted_at' => $faker->dateTimeThisYear(),

            ));
        }
    }
}
