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
            ['relationshipId' => 'Rl001', 'relationshipname' => 'Single'],
            ['relationshipId' => 'Rl002', 'relationshipname' => 'Merried'],
            ['relationshipId' => 'Rl003', 'relationshipname' => 'Divorced'],

        ];

        DB::table('msrelationship')->insert($data);
    }
}
