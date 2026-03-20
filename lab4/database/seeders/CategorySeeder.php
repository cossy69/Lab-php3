<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name'=>'Samsung','listing'=>1,'status'=>1],
            ['name'=>'HTC','listing'=>2,'status'=>1],
            ['name'=>'Apple','listing'=>3,'status'=>1],
            ['name'=>'LG','listing'=>4,'status'=>1],
            ['name'=>'Motorola','listing'=>5,'status'=>1],
            ['name'=>'Mobel','listing'=>6,'status'=>0],
        ]);
    }
}