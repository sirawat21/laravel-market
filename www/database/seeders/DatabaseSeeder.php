<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(FollowingsTableSeeder::class);
        $this->call(ManufacturersTableSeeder::class);
        // $this->call(ItemsTableSeeder::class);
        // $this->call(ImagesTableSeeder::class);
        // $this->call(ReviewsTableSeeder::class);
        // $this->call(VotesTableSeeder::class);
    }
}
