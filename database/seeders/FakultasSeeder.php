<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakultas = [
            [
                'kode_fakultas' => '07',
                'nama_fakultas' => 'Fakultas Teknik',
                'singkatan' => 'FT',
            ],
            [
                'kode_fakultas' => '08',
                'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis',
                'singkatan' => 'FEB',
            ],
            [
                'kode_fakultas' => '09',
                'nama_fakultas' => 'Fakultas Kedokteran',
                'singkatan' => 'FKD',
            ],
            [
                'kode_fakultas' => '10',
                'nama_fakultas' => 'Fakultas Ilmu Sosial dan Politik',
                'singkatan' => 'FISIP',
            ],
            [
                'kode_fakultas' => '11',
                'nama_fakultas' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam',
                'singkatan' => 'FMIPA',
            ],
            [
                'kode_fakultas' => '12',
                'nama_fakultas' => 'Fakultas Sains dan Teknologi',
                'singkatan' => 'FST',
            ],
            [
                'kode_fakultas' => '13',
                'nama_fakultas' => 'Fakultas Ilmu Budaya',
                'singkatan' => 'FIB',
            ],
        ];
        foreach ($fakultas as $fakultas) {
            Fakultas::create($fakultas);
        }
    }
}
