<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $data = [];
        for($i=0; $i<5; $i++){
            $data[]= [
                        'judul'         => $faker->sentence(mt_rand(2, 5)),
                        'penulis'       => $faker->name,
                        'harga'         => $faker->numberBetween(50000, 200000),
                        'tahun'         => $faker->year(),
                        'created_at'    => now(),
                        'updated_at'    => now(),
                        'kategori_id'   => 1,
        ];
        }
        DB::table('buku')->insert($data);

    }
}


