<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* privilege types: gust, member, moderator */
        // Creating Admin account
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Brett',
            'email' => 'brett@email.com',
            'password' => bcrypt('1234'),
            'type' => 'moderator',
            'phone' => '0435348637',
            'address' => '10/10 Queen St. 4500 QLD Australia',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        // Creating Member account
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Moderator',
            'email' => 'moderator@a.org',
            'password' => bcrypt('1234'),
            'type' => 'moderator',
            'phone' => '0432235689',
            'address' => '30/5 Unit 5 Norman St. 4500 QLD Australia',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        // Creating Member account
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Chris',
            'email' => 'chris@a.org',
            'password' => bcrypt('1234'),
            'type' => 'member',
            'phone' => '0422245693',
            'address' => '40/5 Unit 2 Phoma St. 4500 QLD Australia',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        // Creating Member account
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Cara',
            'email' => 'cara@a.org',
            'password' => bcrypt('1234'),
            'type' => 'member',
            'phone' => '0431231673',
            'address' => '20/2 Manson St. 4500 QLD Australia',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        // Creating Member account
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Fred',
            'email' => 'fred@a.org',
            'password' => bcrypt('1234'),
            'type' => 'member',
            'phone' => '0411231389',
            'address' => '20/2 Scarborough St. 4500 QLD Australia',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
