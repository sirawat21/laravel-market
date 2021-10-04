<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Creating simple products
         */
        DB::table('items')->insert([
            'id' => 1,
            'name' => 'iPhone 13 Pro Max',
            'description' => 'Phone 13 Pro and iPhone 13 Pro Max do not include a power adapter or EarPods. Included in the box is a USB‑C to Lightning cable that supports fast charging and is compatible with USB‑C power adapters and computer ports.',
            'price' => 1849.00,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'manufacturer_id' => 4,
            'category_id' => 3,
            'user_id' => 1
        ]);
        DB::table('items')->insert([
            'id' => 2,
            'name' => 'Wilson Blade 100L V7',
            'description' => 'The Wilson Blade 100L V7 is a new model that will be ideal for players searching for maneuverability as well as versatility. In fact, due to its head size of 645cm², this model will be easier than the 98 versions for playing thanks to the greater tolerance it will give during off-center shots.',
            'price' => 289.00,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'manufacturer_id' => 1,
            'category_id' => 4,
            'user_id' => 2
        ]);
        DB::table('items')->insert([
            'id' => 3,
            'name' => 'Lotti Framed Canvas Wall Art',
            'description' => 'Care Instructions: When unpacking the product please ensure it is unpacked on a soft surface to avoid damaging the frame; do not lift the product by the frame itself as this can cause the clips to pop out; to avoid fading, avoid putting the product in the direct sunlight',
            'price' => 379.00,
            'origin_link' => 'https://www.templeandwebster.com.au/Lotti-Framed-Canvas-Wall-Art-LTTC-ICON1119.html',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'manufacturer_id' => 1,
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
