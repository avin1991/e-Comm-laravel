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
                'name'=>'LG',
                'price'=>'20000',
                'description'=>'a smartphone with 4gb Ram',
                'category'=>'mobile',
                'gallery'=>'https://source.unsplash.com/featured?technology'
            ],
            [
                'name'=>'Oppo',
                'price'=>'10000',
                'description'=>'a smartphone with 4gb Ram with 6 inches',
                'category'=>'mobile',
                'gallery'=>'https://source.unsplash.com/featured?technology'
            ],
            [
                'name'=>'Samsung TV',
            'price'=>'10000',
            'description'=>'a samsung tv with classic',
            'category'=>'tv',
            'gallery'=>'https://source.unsplash.com/featured?technology'
            ],
            [
                'name'=>'LG TV',
            'price'=>'10000',
            'description'=>'a LG TV with standard',
            'category'=>'tv',
            'gallery'=>'https://source.unsplash.com/featured?technology'
            ],
            [
                'name'=>'Panasonic',
            'price'=>'10000',
            'description'=>'a frigde with 5 star',
            'category'=>'frigde',
            'gallery'=>'https://source.unsplash.com/featured?technology'
            ]

            
        ]);
    }
}
