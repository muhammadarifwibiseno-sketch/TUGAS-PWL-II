<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $data = [];
        for($i = 0; $i < 10; $i++){
            $npm = '5520124' . $faker->unique()->numerify('###');
            $data[] = [
                'npm' => $npm,
                'nidn' => DB::table('dosen')->inRandomOrder()->value('nidn'),
                'nama' => $faker->name,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('mahasiswa')->insert($data);
    }
}