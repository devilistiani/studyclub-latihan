<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_mahasiswa')->insert([
            'nim' => "F1E123039",
            'nama' => "Devi Listiani Safitri",
            'kelas' => "R001",
            'des' => "Mahasiswa Aktif"
        ]);
    }
}
