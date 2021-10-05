<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Seeding comment lists */
        DB::table('images')->insert([
            'item_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('images')->insert([
            'item_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('images')->insert([
            'item_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
