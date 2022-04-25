<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffCateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('off_cates')->insert(['cate_id'=>2,'offer_id'=>1]);
        DB::table('off_cates')->insert(['cate_id'=>3,'offer_id'=>1]);
        DB::table('off_cates')->insert(['cate_id'=>2,'offer_id'=>2]);
        DB::table('off_cates')->insert(['cate_id'=>3,'offer_id'=>2]);
    }
}
