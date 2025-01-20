<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => Str::random(10),
            'second_name' => Str::random(10),
            'address' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phonenumber' =>  mt_rand(1000000000, 9999999999),
            'years' => rand(18,100)
        ]);   
    }
}
