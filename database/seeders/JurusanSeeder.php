<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create(['nama' => 'Jurusan RPL', 'jenjang' => 'D3']);
        Jurusan::create(['nama' => 'Jurusan Ilkom', 'jenjang' => 'S1']);
    }
}
