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
                'image'=>'https://media3.scdn.vn/img3/2019/10_18/bmqfeS_simg_de2fe0_500x500_maxb.jpg',
                'quantity'=>23,
                'category_id'=>1,
                'user_id'=>1,


            ],
            [
                'id'=>2,
                'name'=>'Giay nike',
                'price'=>500000,
                'oldPrice'=>700000,
                'image'=>'https://capvirgo.com/wp-content/uploads/2018/04/IMG_7403.jpg',
                'quantity'=>23,
                'category_id'=>2,
                'user_id'=>2,
            ],
            [
                'id'=>3,
                'name'=>"Giay chuyen nu",
                'price'=>300000,
                'oldPrice'=>500000,
                'image'=>'https://cf.shopee.vn/file/1f55501661a9b3236cf6eacdb09ba96f',
                'quantity'=>23,
                'category_id'=>3,
                'user_id'=>2,
            ],
            [
                'id'=>4,
                'name'=>"Giay chuyen nu",
                'price'=>300000,
                'oldPrice'=>500000,
                'image'=>'https://cf.shopee.vn/file/1f55501661a9b3236cf6eacdb09ba96f',
                'quantity'=>23,
                'category_id'=>3,
                'user_id'=>2,
            ]
           

        ]);
    }
}
