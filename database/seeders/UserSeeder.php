<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name'=>'Fernando','email'=>'2s1ns1o2nd12d12kdn2dosqmo@awdawdx.com','password'=>Hash::make('ax2DMW1dxXdSKW'),'admin'=>1,'created_at'=>now(),'updated_at'=>now()]);
        DB::table('users')->insert(['name'=>'Letty','email'=>'xmm21f23211d@x21s3f3f34d.com','password'=>Hash::make('JHBS12mNSamlML4'),'admin'=>1,'created_at'=>now(),'updated_at'=>now()]);
    }
}
