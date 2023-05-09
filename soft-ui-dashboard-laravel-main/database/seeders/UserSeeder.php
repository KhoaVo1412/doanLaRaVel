<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Công Thương',
                'email' => 'congthuong@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 1
            ],
            [
                'name' => 'Đăng khoa',
                'email' => 'dangkhoa@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 0
            ],
            [
                'name' => 'Trường Giang',
                'email' => 'truonggiang@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 0
            ],
            [
                'name' => 'Minh Hải',
                'email' => 'minhhai@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 0
            ],
            [
                'name' => 'Quốc Tuấn',
                'email' => 'quoctuan@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 0
            ],
            [
                'name' => 'Công Tín',
                'email' => 'congtin@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 0
            ],

        ]);
    }
}
