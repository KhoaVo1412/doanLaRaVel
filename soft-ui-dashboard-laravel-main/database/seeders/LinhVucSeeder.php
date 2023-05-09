<?php

namespace Database\Seeders;

use App\Models\LinhVuc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linh_vucs')->insert([
            [
                'tenlv' => 'Java',
                'trangthai' => '1',
            ],
            [
                'tenlv' => 'C++',
                'trangthai' => '1',
            ],
            [
                'tenlv' => 'C#',
                'trangthai' => '1',
            ],

        ]);
    }
}
