<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** 
        * Followings table is related to Users table by 
        * user_id as a owner of account
        * following as whom is followed
        */
        DB::table('followings')->insert([
            'user_id' => 1,
            'following' => 2
        ]);
        DB::table('followings')->insert([
            'user_id' => 1,
            'following' => 2
        ]);
    }
}
