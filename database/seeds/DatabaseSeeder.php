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
        // $this->call(UsersTableSeeder::class);
        $this->call( (new UserSeeder())->run());
        $this->call( (new ProfilesTableSeeder())->run());
        $this->call( (new TweetsTableSeeder())->run());
        // $this->call( (new CommentsTableSeeder())->run());

    }
}
