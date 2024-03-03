<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class biodata_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodata')->insert([
            'nim' => 'E'.random_int(00000000, 99999999),
            'nama' => 'Hafidzul Ahkam Dwika Maulana',
            'alamat' => fake()->address,
            'prodi' => 'Teknik Informatika',
            'telpon' => fake()->phoneNumber,
            'ttl' => fake()->date,

        ]);
    }
}
