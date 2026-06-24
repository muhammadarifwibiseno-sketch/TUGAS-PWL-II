<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswas = DB::table('mahasiswa')->pluck('npm');
        $matakuliahs = DB::table('matakuliah')->pluck('kode_matakuliah');

        foreach ($mahasiswas as $npm) {
            foreach ($matakuliahs->random(4) as $kode) {
                DB::table('krs')->insert([
                    'npm' => $npm,
                    'kode_matakuliah' => $kode,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
