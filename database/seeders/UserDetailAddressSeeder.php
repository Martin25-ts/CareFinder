<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDetailAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'userid' => 'US003',
            'userdetailid' => 'UD004',
            'userstreet' => 'Jl.Sandang',
            'userward' => 'Kebunjeruk',
            'userdistrict' => 'Jakarta Barat',
            'userregency' => 'Jakarta',
            'userpostal' => '17121'
        ];

        DB::table('userdetailaddress')->insert($data);
    }
}
