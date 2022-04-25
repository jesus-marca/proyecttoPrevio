<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['cate_name'=>'Otros']);
        DB::table('categories')->insert(['cate_name'=>'Stickers']);
        DB::table('categories')->insert(['cate_name'=>'Expansores']);
        DB::table('categories')->insert(['cate_name'=>'Cartas de tarot']);
    }
}
