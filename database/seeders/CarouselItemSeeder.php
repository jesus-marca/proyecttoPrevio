<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousel_items')->insert(['prod_id'=>3]);
        DB::table('carousel_items')->insert(['prod_id'=>4]);
        DB::table('carousel_items')->insert(['prod_id'=>5]);
        DB::table('carousel_items')->insert(['prod_id'=>6]);
    }
}
