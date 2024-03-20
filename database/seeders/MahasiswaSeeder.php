<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nim' => 'E41221737',
            'nama_mhs' => 'Muhammad Rayasya Dziqi Cahyana',
            'prodi_mhs' => 'TIF',
            'alamat_mhs' => 'Jl. Jalan',
            'no_telp' => '081234567890',
            'tanggal_lahir' => '2003-05-11',
            'created_at' => now()
        ]);
    }
}
