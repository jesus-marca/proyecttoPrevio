<?php

namespace Database\Seeders;

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
        DB::table('products')->insert(
            ['prod_name'=>'Sticker de Gatito pusheen',
            'prod_quantity'=>'10',
            'prod_description'=>'Sticker de Gatito pusheen',
            'prod_features'=>'Sticker de Gatito pusheen',
            'prod_view'=>2,
            'prod_price'=>30.00,'prod_sell_num'=>1,'prod_img1'=>'https://res.cloudinary.com/oxiname/image/upload/v1650757851/Stickers/1/fhgsjqqjhi2z367xjers.jpg','cate_id'=>1]);
        DB::table('products')->insert(
            ['prod_name'=>'Sticker de esqueletos',
            'prod_quantity'=>'6',
            'prod_description'=>'Sticker de esqueletos',
            'prod_features'=>'Sticker de esqueletos',
            'prod_view'=>2,'prod_price'=>20.00,'prod_sell_num'=>0,'prod_img1'=>'https://res.cloudinary.com/oxiname/image/upload/v1650757894/Stickers/3/grlqvt8pfbndd1oixyr2.png','cate_id'=>1]);
        DB::table('products')->insert(
            ['prod_name'=>'Expansores de madera',
            'prod_quantity'=>'6',
            'prod_description'=>'Expansores de madera',
            'prod_features'=>'Expansores de madera',
            'prod_view'=>2,'prod_price'=>40.00,'prod_sell_num'=>1,'prod_img1'=>'https://res.cloudinary.com/oxiname/image/upload/v1650757781/Expansores/1/acssjqkynivjr4veuuaw.jpg','cate_id'=>2]);
    }
}
