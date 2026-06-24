<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $matkuls = [
            'Basis Data',
            'Struktur Data',
            'Jaringan Komputer',
            'Pemrograman Web',
            'Rekayasa Perangkat Lunak'
        ];
        foreach($matkuls as $matkul){
            $sks = $faker->numberBetween(2,3);
            $praktikum = $faker->numberBetween(0,1);
            $random = $faker->unique()->numberBetween(1,9);
            $kode_mk = 'IF' . '4' . $random . $praktikum . '2' . $sks;
            DB::table('matakuliah')->insert([
                'kode_matakuliah' => $kode_mk,
                'nama_matakuliah' => $matkul,
                'sks' => $sks,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
