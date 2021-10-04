<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Seeding category lists */
        DB::table('categories')->insert([
            'name' => 'Art',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('categories')->insert([
            'name' => 'Cloth',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('categories')->insert([
            'name' => 'Electronic',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('categories')->insert([
            'name' => 'Sport',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('categories')->insert([
            'name' => 'Graden',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('categories')->insert([
            'name' => 'Home',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
