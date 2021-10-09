<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Seeding manufacturer lists */
        DB::table('manufacturers')->insert([
            'name' => 'American',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Australia',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Canada',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'China',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'United Kingdom',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Korea',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Japan',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
