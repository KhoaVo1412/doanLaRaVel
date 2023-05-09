<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\NapThe;

class NapTheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nap_thes')->insert([
            [
                'loaithe' => 'Garena',
                'menhgia' => '10000',
                'mathe' => '1999234567',
                'trangthai' => '1',
            ],
            [
                'loaithe' => 'Garena',
                'menhgia' => '20000',
                'mathe' => '6789987650',
                'trangthai' => '1',
            ],
            [
                'loaithe' => 'Garena',
                'menhgia' => '50000',
                'mathe' => '1234567894',
                'trangthai' => '1',
            ],
            [
                'loaithe' => 'Viettel',
                'menhgia' => '10000',
                'mathe' => '7890123456',
                'trangthai' => '1',
            ],
            [
                'loaithe' => 'Viettel',
                'menhgia' => '20000',
                'mathe' => '0978678543',
                'trangthai' => '1',
            ],
            [
                'loaithe' => 'Viettel',
                'menhgia' => '20000',
                'mathe' => '0978876543',
                'trangthai' => '1',
            ],
          
        ]);
    }
}
