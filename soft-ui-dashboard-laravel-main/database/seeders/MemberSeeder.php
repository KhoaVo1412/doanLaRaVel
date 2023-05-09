<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'name' => 'A',
                'email' => 'a@gmail.com',
                'password' => Hash::make('123456'),
                'kc' => 100,
                'trangthai'=>1
            ],
            [
                'name' => 'B',
                'email' => 'b@gmail.com',
                'password' => Hash::make('123456'),
                'kc' => 100,
                'trangthai'=>1
            ],
            [
                'name' => 'C',
                'email' => 'c@gmail.com',
                'password' => Hash::make('123456'),
                'kc' => 100,
                'trangthai'=>1
            ],
            [
                'name' => 'D',
                'email' => 'd@gmail.com',
                'password' => Hash::make('123456'),
                'kc' => 100,
                'trangthai'=>1
            ],
            [
                'name' => 'E',
                'email' => 'e@gmail.com',
                'password' => Hash::make('123456'),
                'kc' => 100,
                'trangthai'=>1
            ],
            [
                'name' => 'F',
                'email' => 'f@gmail.com',
                'password' => Hash::make('123456'),
                'kc' => 100,
                'trangthai'=>1
            ],

        ]);
    }
}
