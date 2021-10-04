<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Seeding comment lists */
        DB::table('comments')->insert([
            'message' => 'Good product.',
            'user_id' => 1,
            'item_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('comments')->insert([
            'message' => 'Sutable price.',
            'user_id' => 2,
            'item_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
