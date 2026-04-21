<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            'nama_kategori' => 'Pemrograman',
            'created_at' =>now(),
            'updated_at' =>now()
        ];
        DB::table('kategori')->insert($kategori);

    }
}
