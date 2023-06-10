<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MsBloodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['bloodId' => 'BL000', 'bloodName' => 'required'],
            ['bloodId' => 'BL001', 'bloodName' => 'A'],
            ['bloodId' => 'BL002', 'bloodName' => 'B'],
            ['bloodId' => 'BL003', 'bloodName' => 'AB'],
            ['bloodId' => 'BL004', 'bloodName' => 'O'],
        ];

        DB::table('msblood')->insert($data);
    }
}
