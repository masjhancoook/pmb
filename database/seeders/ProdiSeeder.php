<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodis = [
            [
                'kode_prodi' => '35',
                'nama_prodi' => 'Teknik Informatika',
                'singkatan' => 'TI',
                'fakultas_id' => '1',  // Kode fakultas yang sudah ada di tabel fakultas
            ],
            [
                'kode_prodi' => '36',
                'nama_prodi' => 'Manajemen',
                'singkatan' => 'MGT',
                'fakultas_id' => '2',
            ],
            [
                'kode_prodi' => '37',
                'nama_prodi' => 'Dokter Umum',
                'singkatan' => 'DKR',
                'fakultas_id' => '3',
            ],
            [
                'kode_prodi' => '38',
                'nama_prodi' => 'Ilmu Politik',
                'singkatan' => 'IP',
                'fakultas_id' => '4',
            ],
            [
                'kode_prodi' => '39',
                'nama_prodi' => 'Matematika',
                'singkatan' => 'MTK',
                'fakultas_id' => '5',
            ],
            [
                'kode_prodi' => '40',
                'nama_prodi' => 'Fisika',
                'singkatan' => 'FSK',
                'fakultas_id' => '5',
            ],
            [
                'kode_prodi' => '7',
                'nama_prodi' => 'Sastra Inggris',
                'singkatan' => 'SI',
                'fakultas_id' => '6',
            ],
        ];

        foreach ($prodis as $prodi) {
            Prodi::create($prodi);
        }
    }
}
