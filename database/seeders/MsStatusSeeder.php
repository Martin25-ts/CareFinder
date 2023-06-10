<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MsStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            ['statusId' => 'ST001', 'status' => 'Not Verified'],
            ['statusId' => 'ST002', 'status' => 'Verified'],
            ['statusId' => 'ST003', 'status' => 'Suspend'],
            ['statusId' => 'ST004', 'status' => 'Banned'],
        ];
        DB::table('msstatus')->insert($data);
    }
}
