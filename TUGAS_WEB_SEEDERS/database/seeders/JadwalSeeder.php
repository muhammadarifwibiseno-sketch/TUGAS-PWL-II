<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $matakuliahs = DB::table('matakuliah')->pluck('kode_matakuliah');
        $dosens = DB::table('dosen')->pluck('nidn');

        for ($i = 0; $i < 10; $i++) {
            DB::table('jadwal')->insert([
                'kode_matakuliah' => $faker->randomElement($matakuliahs->toArray()),
                'nidn' => $faker->randomElement($dosens->toArray()),
                'kelas' => $faker->randomElement(['A', 'B', 'C', 'D']),
                'hari' => $faker->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']),
                'jam' => $faker->randomElement(['08:00:00', '10:30:00', '13:00:00', '15:30:00']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}