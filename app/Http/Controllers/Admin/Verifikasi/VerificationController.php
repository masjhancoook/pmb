<?php

namespace App\Http\Controllers\Admin\Verifikasi;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VerificationController extends Controller
{
    public function render()
    {
        $verifikasi = Mahasiswa::with('peminatan', 'prodi', 'sekolah', 'orangtua', 'verifikasi')->get();
        return view('app.verifikasi.index', ['verifikasi' => $verifikasi]);
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::with('verifikasi')->where('id', $id)->first();
        return view('app.verifikasi.edit', ['mahasiswa' => $mahasiswa,]);
    }

    public function update(Request $request, $id)
    {
        $nim = $this->generateNPM($id);
        $validated = $request->validate([
            'status' => 'required',
        ]);
        $mahasiswa = Mahasiswa::findOrFail($id);
        if ($validated['status'] == 'Tidak Lulus') {
            $mahasiswa->update([
                'status' => $request->status,
            ]);
            return redirect()->back()->with('success', 'Status berhasil diupdate');
        } else {
            $mahasiswa->update([
                'status' => $request->status,
                'nim' => $nim,
            ]);
            return redirect()->back()->with('success', 'Status dan NIM berhasil diupdate');
        }
        // return redirect()->back() - with('error', 'perubahan gagal dilakukan, silahkan coba lagi');
    }

    public function generateNPM($id)
    {
        $increment = Mahasiswa::orderBy(column: 'nim', direction: 'desc')->pluck('nim')->first();
        if ($increment == null) {
            $substring = 0;
        } else {
            $substring = substr($increment, -4);
        }
        $mahassiswa = Mahasiswa::with('prodi', 'peminatan')->findOrFail($id);
        $fakultas = $mahassiswa->prodi->fakultas->kode_fakultas;
        $prodi = $mahassiswa->prodi->kode_prodi;
        $convert_tahun_masuk = \Carbon\Carbon::parse($mahassiswa->created_at)->format('Y');
        $tahun_masuk = $convert_tahun_masuk;
        $npm = $fakultas . '' . $prodi . '' . $tahun_masuk . '' .  str_pad($substring + 1, 4, 0, STR_PAD_LEFT);
        return $npm;
    }
}
