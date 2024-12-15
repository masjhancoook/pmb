<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $berita =
            [
                [
                    'judul' => 'Penerimaan Mahasiswa Baru',
                    'konten' => 'Penerimaan mahasiswa baru akan dilakukan pada tanggal 1 Juni 2024.',
                    'gambar' => 'https://example.com/gambar.jpg',
                    'penulis' => 'admin',
                ],
                [
                    'judul' => 'Pengumuman Hasil Seleksi',
                    'konten' => 'Pengumuman hasil seleksi akan dilakukan pada tanggal 15 Juni 2024.',
                    'gambar' => 'https://example.com/gambar.jpg',
                    'penulis' => 'admin',
                ],
                [
                    'judul' => 'Pendaftaran Online',
                    'konten' => 'Pendaftaran online akan dilakukan pada tanggal 1 Juli 2024.',
                    'gambar' => 'https://example.com/gambar.jpg',
                    'penulis' => 'admin',
                ],
                [
                    'judul' => 'Pembayaran Biaya Kuliah',
                    'konten' => 'Pembayaran biaya kuliah akan dilakukan pada tanggal 15 Juli 2024.',
                    'gambar' => 'https://example.com/gambar.jpg',
                    'penulis' => 'admin',
                ],

            ];

        foreach ($berita as $item) {
            Berita::create($item);
        }
    }
}
