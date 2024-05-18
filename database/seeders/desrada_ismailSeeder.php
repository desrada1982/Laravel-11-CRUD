<?php

namespace Database\Seeders;

use App\Models\Desrada_ismail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class desrada_ismailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Desrada_ismail::create([
            "nim" => "231350143",
            "nama" => "Desrada ismail Rama Saputra",
            "kelas" => "Malam A",
            "Jenis_kelamin" => "Laki-laki"
        ]);
    }
}
