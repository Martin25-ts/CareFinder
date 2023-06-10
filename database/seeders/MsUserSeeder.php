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
            'userid' => 'US005',
            'userfname' => 'Muhhamad Adzka',
            'userlname' => 'Fariqi',
            'password' => bcrypt('adzka123'),
            'userphone' => '082246078543',
            'useremail' => 'muhammad.fariqi@binus.ac.id',
            'userprofile' => 'resource\profileuser\background adzka.jpg',
            'userheight' => 175,
            'userweight' => 70,
            'bloodId' => 'BL001',
            'relationshipId' => 'RL001',
            'userinsurance' => 'Pertamina',
            'userdisesase' => 'Kurang kasih sayang perempuan',
            'genderId' => 'GN001',
            'statusId' => 'ST001',
            'remember_token' => 'NULL',
            'userDOB' => 'NULL'
        ];

        DB::table('msuser')->insert($data);


    }
}
