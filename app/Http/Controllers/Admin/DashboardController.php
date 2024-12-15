<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function render()
    {
        $mahasiswas = Mahasiswa::all();
        $jumlahLulusan = Mahasiswa::where('status', 'lulus')->count();
        $konfirmasi = Pembayaran::where('status', operator: 'Menunggu Konfirmasi')->count();
        $belumBayar = Pembayaran::where('status', 'Belum Bayar')->count();
        $lunas = Pembayaran::where('status', 'Lunas')->count();
        return view('app.index', ['mahasiswas' => $mahasiswas, 'jumlahLulusan' => $jumlahLulusan, 'konfirmasi' => $konfirmasi, 'belumbayar' => $belumBayar, 'lunas' => $lunas]);
    }
}
