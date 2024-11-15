<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Scholarship;

class ScholarshipSeeder extends Seeder
{
    public function run()
    {
        Scholarship::create([
            'name' => 'Beasiswa Prestasi Akademik',
            'description' => 'Beasiswa untuk mahasiswa dengan prestasi akademik unggul.',
        ]);

        Scholarship::create([
            'name' => 'Beasiswa Non-Akademik',
            'description' => 'Beasiswa untuk mahasiswa dengan prestasi di bidang olahraga atau seni.',
        ]);
    }
}
