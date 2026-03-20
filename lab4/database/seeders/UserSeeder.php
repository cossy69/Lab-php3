<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Dùng Hash cho chuyên nghiệp
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ho = ['Nguyễn','Lê','Phan','Đỗ','Hồ','Võ','Bùi'];
        $lot = ['Thị','Văn','Đức','Ngọc','Hoàng','Minh','Kim',''];
        $ten = ['Tâm','Thảo','Hải','Hòa','Hảo','Thanh','Tú','Hậu','Phương'];
        
        for($i=0; $i<10; $i++){
            // Lọc bỏ khoảng trắng thừa nếu $lot là rỗng
            $ht = trim(Arr::random($ho).' '. Arr::random($lot).' '.Arr::random($ten));
            $ht = preg_replace('/\s+/', ' ', $ht);

            DB::table('users')->insert([
                'name' => $ht,
                'email' => Str::random(5).'@gmail.com',
                'password' => Hash::make('hehe'), // Dùng Hash::make thay cho bcrypt cho chuẩn Laravel mới
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}