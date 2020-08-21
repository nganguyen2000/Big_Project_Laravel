<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>"Ao thun nu",
                'price'=>230000,
                'oldPrice'=>250000,
                'image'=>'/storage/public/h1.jpg',
                'quantity'=>23,
                'category_id'=>1,
                'user_id'=>1,


            ],
            [
                'id'=>2,
                'name'=>'Giay nike',
                'price'=>500000,
                'oldPrice'=>700000,
                'image'=>'/storage/public/h2.jpg',
                'quantity'=>23,
                'category_id'=>2,
                'user_id'=>2,
            ],
            [
                'id'=>3,
                'name'=>"Giay chuyen nu",
                'price'=>300000,
                'oldPrice'=>500000,
                'image'=>'/storage/public/h4.jpg',
                'quantity'=>23,
                'category_id'=>3,
                'user_id'=>2,
            ],
            [
                'id'=>4,
                'name'=>"Giay chuyen nu",
                'price'=>300000,
                'oldPrice'=>500000,
                'image'=>'/storage/public/h5.jpg',
                'quantity'=>23,
                'category_id'=>3,
                'user_id'=>2,
            ]
           

        ]);
    }
}
