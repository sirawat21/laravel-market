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
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('1234'),
            'type' => 'moderator',
            'phone' => '0435348637',
            'address' => '10/10 Queen St. 4500 QLD Australia'
        ]);
        // Creating Member account
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Brett Sira',
            'email' => 'brettsira@email.com',
            'password' => bcrypt('1234'),
            'type' => 'member',
            'phone' => '0432235689',
            'address' => '30/5 Unit 5 Norman St. 4500 QLD Australia'
        ]);
    }
}
