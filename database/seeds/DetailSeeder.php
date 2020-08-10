<?php

use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('details')->insert([
       		[
       			'id'=>1,
       			'content'=>'Màu sắc tươi đẹp, mịn mắt, Dễ dàng phối với nhiều loại trang phục',
       			'product_id'=>1,
           		
       		],
       		[
       			'id'=>2,
       			'content'=>'Đế giày: Cao su non đúc nguyên khối chịu ma sát tốt, nhẹ, êm, cân bằng và bền bỉ, Thân giày: Da tổng hợp phối vải mesh thoáng khí',
       			'product_id'=>2,
       			
       		],
       		[
       			'id'=>3,
       			'content'=>'Đế giày: Cao su non đúc nguyên khối chịu ma sát tốt, nhẹ, êm, cân bằng và bền bỉ, Thân giày: Da tổng hợp phối vải mesh thoáng khí',
       			'product_id'=>3,
       			
       		],
       		[
       			'id'=>4,
       			'content'=>'Đế giày: Cao su non đúc nguyên khối chịu ma sát tốt, nhẹ, êm, cân bằng và bền bỉ, Thân giày: Da tổng hợp phối vải mesh thoáng khí',
       			'product_id'=>4,
       			
       		]

     	]);
    
}
}
