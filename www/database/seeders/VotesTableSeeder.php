<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* Seeding review lists */
       DB::table('votes')->insert([
        'like' => 1,
        'dislike' => 0,
        'users_id' => 1,
        'reviews_id' => 1,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        'created_at' => DB::raw('CURRENT_TIMESTAMP')
    ]);
    DB::table('votes')->insert([
        'like' => 1,
        'dislike' => 0,
        'users_id' => 2,
        'reviews_id' => 2,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        'created_at' => DB::raw('CURRENT_TIMESTAMP')
    ]);
    DB::table('votes')->insert([
        'like' => 1,
        'dislike' => 0,
        'users_id' => 2,
        'reviews_id' => 1,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        'created_at' => DB::raw('CURRENT_TIMESTAMP')
    ]);
    }
}
