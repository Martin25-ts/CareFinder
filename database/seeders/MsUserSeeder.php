<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MsUserSeeder extends Seeder
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
            'userfname' => 'Putra Panca',
            'userlname' => 'Prasetya',
            'password' => bcrypt('panca123'),
            'userphone' => '082246078543',
            'useremail' => 'putra.prasetya@binus.ac.id',
            'userprofile' => 'resource\profileuser\background panca.jpg',
            'userheight' => 175,
            'userweight' => 70,
            'bloodId' => 'BL001',
            'relationshipId' => 'RL001',
            'userinsurance' => 'Pertamina',
            'userdisesase' => 'Kurang kasih sayang perempuan',
            'genderId' => 'GN001',
            'statusId' => 'ST001',
            'remeber_token' => 'NULL'
        ];

        DB::table('msuser')->insert($data);


    }
}
