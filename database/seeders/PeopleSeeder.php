<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'nama_depan' => 'Martin Timoteus',
            'nama_belakang' => 'Siagian',
            'email' => 'martin.siagian@binus.ac.id',
            'no_telepon' => '082246078543',
            'kata_sandi' => 'qwerty1234',
            'status' => 'aktif',
            'role' => 'admin',
            'created-at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
