<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* Seeding review lists */
       DB::table('reviews')->insert([
        'like' => 1,
        'dislike' => 0,
        'user_id' => 1,
        'item_id' => 1,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
    ]);
    DB::table('reviews')->insert([
        'like' => 1,
        'dislike' => 0,
        'user_id' => 2,
        'item_id' => 2,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
    ]);
    DB::table('reviews')->insert([
        'like' => 1,
        'dislike' => 0,
        'user_id' => 2,
        'item_id' => 1,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
    ]);
    }
}
