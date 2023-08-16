<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nilai;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nilai::create([
            'mahasiswa_id' => 1,
            'matakuliah_id' => 1,
            'nilai_harian' => 80,
            'nilai_uts' => 85,
            'nilai_akhir' => 82.5,
            'grade' => 'B'
        ]);

        Nilai::create([
            'mahasiswa_id' => 2,
            'matakuliah_id' => 2,
            'nilai_harian' => 75,
            'nilai_uts' => 88,
            'nilai_akhir' => 81.5,
            'grade' => 'B'
        ]);
    }
}
