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
        /* Seeding comment lists */
        DB::table('reviews')->insert([
            'message' => 'Good product.',
            'rate' => 5,
            'users_id' => 1,
            'items_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'message' => 'Sutable price.',
            'rate' => 3,
            'users_id' => 2,
            'items_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
