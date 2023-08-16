<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matakuliah;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matakuliah::create(['nama' => 'pemrograman web service', 'semester' => 1, 'sks_teori' => 3, 'sks_praktikum' => 1, 'jurusan_id' => 1]);
        Matakuliah::create(['nama' => 'Jarkom', 'semester' => 2, 'sks_teori' => 2, 'sks_praktikum' => 1, 'jurusan_id' => 2]);
    }
}
