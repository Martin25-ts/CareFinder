<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MsGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['genderId' => 'GN000', 'gendername' => 'required'],
            ['genderId' => 'GN001', 'gendername' => 'Male'],
            ['genderId' => 'GN002', 'gendername' => 'Female'],
            ['genderId' => 'GN003', 'gendername' => 'Prefer not to say'],
        ];

        DB::table('msgender')->insert($data);
    }
}
