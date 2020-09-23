<?php

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
        $data=[
            ['name'=>'BẠC SỈU','category_id'=>1,'price'=>'32000'],
            ['name'=>'CÀ PHÊ ĐEN','category_id'=>1,'price'=>'32000'],
            ['name'=>'CÀ PHÊ SỮA','category_id'=>1,'price'=>'32000'],
            ['name'=>'CÀ PHÊ SỮA SÀI GÒN','category_id'=>1,'price'=>'32000'],
            ['name'=>'CÀ PHÊ ĐEN SÀI GÒN','category_id'=>1,'price'=>'32000'],
            ['name'=>'AMERICANO','category_id'=>2,'price'=>'32000'],
            ['name'=>'CAPPUCCINO','category_id'=>2,'price'=>'32000'],
            ['name'=>'CARAMEL MACCHIATO','category_id'=>2,'price'=>'32000'],
            ['name'=>'ESPRESSO','category_id'=>2,'price'=>'32000'],
            ['name'=>'LATTE','category_id'=>2,'price'=>'32000'],
            ['name'=>'MOCHA','category_id'=>2,'price'=>'32000'],
            ['name'=>'COLD BREW TRUYỀN THỐNG','category_id'=>2,'price'=>'32000'],
            ['name'=>'COLD BREW CAM VÀNG','category_id'=>3,'price'=>'32000'],
            ['name'=>'COLD BREW SỮA TƯƠI MACCHIATO','category_id'=>3,'price'=>'32000'],
            ['name'=>'COLD BREW PHÚC BỒN TỬ','category_id'=>3,'price'=>'32000'],
            ['name'=>'COLD BREW SỮA TƯƠI','category_id'=>3,'price'=>'32000'],
            ['name'=>'TRÀ Ô LONG VẢI','category_id'=>4,'price'=>'32000'],
            ['name'=>'TRÀ Ô LONG HẠT SEN','category_id'=>4,'price'=>'32000'],
            ['name'=>'TRÀ ĐÀO CAM SẢ','category_id'=>4,'price'=>'32000'],
            ['name'=>'TRÀ Ô LONG BƯỞI MẬT ONG','category_id'=>4,'price'=>'32000'],
            ['name'=>'TRÀ Ô LONG PHÚC BỒN TỬ','category_id'=>4,'price'=>'32000'],
            ['name'=>'TRÀ LÀI MACCHIATO','category_id'=>5,'price'=>'32000'],
            ['name'=>'TRÀ ĐEN MACCHIATO','category_id'=>5,'price'=>'32000'],
            ['name'=>'TRÀ SỮA MẮC CA TRÂN CHÂU TRẮNG','category_id'=>5,'price'=>'32000'],
            ['name'=>'TRÀ MATCHA MACCHIATO','category_id'=>5,'price'=>'32000'],
            ['name'=>'TRÀ XOÀI MACCHIATO','category_id'=>5,'price'=>'32000'],
            ['name'=>'TRÀ CÀ PHÊ ĐÁ XAY','category_id'=>5,'price'=>'32000'],
            ['name'=>'CÀ PHÊ ĐÁ XAY','category_id'=>6,'price'=>'32000'],
            ['name'=>'CHANH SẢ ĐÁ XAY','category_id'=>7,'price'=>'32000'],
            ['name'=>'PHÚC BỒN TỬ CAM ĐÁ XAY','category_id'=>7,'price'=>'32000'],
            ['name'=>'SINH TỐ CAM XOÀI','category_id'=>7,'price'=>'32000'],
            ['name'=>'SINH TỐ VIỆT QUẤT','category_id'=>7,'price'=>'32000'],
        ];
        DB::table('products')->insert($data);
    }
}
