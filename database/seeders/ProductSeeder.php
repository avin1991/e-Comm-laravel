<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo',
                'price'=>'10000',
                'description'=>'a smartphone with 4gb Ram with 6 inches',
                'category'=>'mobile',
                'gallery'=>'https://unsplash.com/photos/Ftx92UKO3Xg'
            ],
            [
                'name'=>'Samsung TV',
            'price'=>'10000',
            'description'=>'a samsung tv with classic',
            'category'=>'tv',
            'gallery'=>'https://unsplash.com/photos/CZ6PG4ozU9c'
            ],
            [
                'name'=>'LG TV',
            'price'=>'10000',
            'description'=>'a LG TV with standard',
            'category'=>'tv',
            'gallery'=>'https://unsplash.com/photos/CZ6PG4ozU9c'
            ],
            [
                'name'=>'Panasonic',
            'price'=>'10000',
            'description'=>'a frigde with 5 star',
            'category'=>'frigde',
            'gallery'=>'https://www.samsung.com/in/refrigerators/one-door/182l-elegant-inox-rr20r1y2ys8-hl/'
            ]

            
        ]);
    }
}
