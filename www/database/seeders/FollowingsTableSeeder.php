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
            'users_id' => 1,
            'following' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('followings')->insert([
            'users_id' => 2,
            'following' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('followings')->insert([
            'users_id' => 1,
            'following' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
