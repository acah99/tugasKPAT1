<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create(['nim' => '1234567890', 'nama' => 'iwan', 'alamat' => '123 Main St', 'jenis_kelamin' => 'L']);
        Mahasiswa::create(['nim' => '0987654321', 'nama' => 'diana', 'alamat' => '456 Elm St', 'jenis_kelamin' => 'P']);
    }
}
