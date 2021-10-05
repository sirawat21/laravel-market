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
        'user_id' => 1,
        'review_id' => 1,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
    ]);
    DB::table('votes')->insert([
        'like' => 1,
        'dislike' => 0,
        'user_id' => 2,
        'review_id' => 2,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
    ]);
    DB::table('votes')->insert([
        'like' => 1,
        'dislike' => 0,
        'user_id' => 2,
        'review_id' => 1,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
    ]);
    }
}
