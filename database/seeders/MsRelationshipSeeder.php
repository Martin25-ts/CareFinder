<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MsRelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['relationshipId' => 'RL000', 'relationshipname' => 'required'],
            ['relationshipId' => 'RL001', 'relationshipname' => 'Single'],
            ['relationshipId' => 'RL002', 'relationshipname' => 'Merried'],
            ['relationshipId' => 'RL003', 'relationshipname' => 'Divorced'],

        ];

        DB::table('msrelationship')->insert($data);
    }
}
