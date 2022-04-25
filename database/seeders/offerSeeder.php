<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class offerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert(['off_name'=>'SALE SUBTOTAL 10%','off_description'=>'Se hace un descuento al subtotal por la compra de 2 paquetes de stickers o expansores','off_type'=>'promocion','off_target'=>'subtotal','off_value'=>'-10','off_order'=>'1','off_is_active'=>true]);
        DB::table('offers')->insert(['off_name'=>'SALE SUBTOTAL 15%','off_description'=>'Se hace un descuento al subtotal por la compra de 3 paquetes o mas de stickers o expansores','off_type'=>'promocion','off_target'=>'subtotal','off_value'=>'-15','off_order'=>'1','off_is_active'=>true]);
    }
}
