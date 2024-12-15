<?php

namespace App\Http\Controllers\Admin\Pendaftaran;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Orangtua;
use App\Models\Pembayaran;
use App\Models\Peminatan;
use App\Models\Prodi;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Barryvdh\DomPDF\Facade\Pdf;

class PendaftaranController extends Controller
{
    public function render()
    {
        $mahasiswa = Mahasiswa::where('user_id', Auth::user()->id)->with('user', 'orangtua', 'sekolah', 'peminatan', 'pembayaran')->first();
        $pembayaran = Pembayaran::where('mahasiswa_id', $mahasiswa->id)->first();
        return view('app.pendaftaran.index', ['mahasiswa' => $mahasiswa, 'pembayaran' => $pembayaran]);
    }

    public function create()
    {
        $user = Auth::user();
        $mahasiswas = Mahasiswa::where('user_id', $user->id)->get();
        if ($mahasiswas->count() > 0) {
            return redirect()->route('app.pendaftaran.index');
        }
        $prodis = Prodi::with('fakultas')->get();
        return view('app.pendaftaran.create', ['prodis' => $prodis]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama' => 'something',
                'email' => 'something',
                'nik' => 'required|unique:mahasiswa,nik',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'agama' => 'required',
                'alamat' => 'required',
                'nomor_telepon' => 'required',
                'kewarganegaraan' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'nama_sekolah' => 'required',
                'jenis_sekolah' => 'required',
                'nisn' => 'required',
                Rule::unique('sekolah', 'nisn'),
                'alamat_sekolah' => 'required',
                'tahun_lulus' => 'required',
                'jurusan' => 'required',
                'provinsi' => 'required',
                'kabupaten' => 'required',
                'nama_ayah' => 'required',
                'pekerjaan_ayah' => 'required',
                'pendidikan_ayah' => 'required',
                'penghasilan_ayah' => 'required',
                'nomor_telepon_ayah' => 'required',
                'nama_ibu' => 'required',
                'pekerjaan_ibu' => 'required',
                'pendidikan_ibu' => 'required',
                'penghasilan_ibu' => 'required',
                'nomor_telepon_ibu' => 'required',
                'nama_wali' => 'required',
                'nomor_telepon_wali' => 'required',
                'pilihan_pertama' => 'required',
                'pilihan_kedua' => 'required',
            ]
        );

        // upload foto
        if ($request->hasFile('foto')) {
            $path = $request->file('foto');
            $filename = now()->format('Y-m-d') . '-' . str_replace(' ', '-', Auth::user()->name) . '.' . $path->getClientOriginalExtension();
            $paths = $path->storeAs('pendaftaran', $filename, 'public');
        } else {
            $paths = '';
        }

        Orangtua::create([
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'nomor_telepon_ayah' => $request->nomor_telepon_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'nomor_telepon_ibu' => $request->nomor_telepon_ibu,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'nama_wali' => $request->nama_wali,
            'nomor_telepon_wali' => $request->nomor_telepon_wali,

        ]);

        Sekolah::create([
            'nama_sekolah' => $request->nama_sekolah,
            'jenis_sekolah' => $request->jenis_sekolah,
            'nisn' => $request->nisn,
            'alamat_sekolah' => $request->alamat_sekolah,
            'tahun_lulus' => $request->tahun_lulus,
            'jurusan' => $request->jurusan,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
        ]);

        Peminatan::create([
            'pilihan_pertama' => $request->pilihan_pertama,
            'pilihan_kedua' => $request->pilihan_kedua,
            'prodi_id' => Auth::user()->id
        ]);

        $getProdiID = Prodi::first();
        $getPeminatanID = Peminatan::first();
        $getOrangtuaID = Orangtua::first();
        $getSekolahID = Sekolah::first();


        $mahasiswa = Mahasiswa::create([

            // jurusan
            'pilihan_pertama' => $request->pilihan_pertama,
            'pilihan_kedua' => $request->pilihan_kedua,
            'nama' => Auth::user()->name,
            'email' => Auth::user()->email,
            'nik' => $request->nik,
            'nomor_telepon' => $request->nomor_telepon,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kewarganegaraan' => $request->kewarganegaraan,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto' => $paths,
            'user_id' => Auth::user()->id,
            'prodi_id' => $getProdiID->id,
            'peminatan_id' => $getPeminatanID->id,
            'sekolah_id' => $getSekolahID->id,
            'orangtua_id' => $getOrangtuaID->id,

        ]);
        // buat pembayaran otomatis
        $nomialbayar = '200000';
        Pembayaran::create(
            [
                'mahasiswa_id' => $mahasiswa->id,
                'nominal' => $nomialbayar,
            ]
        );

        if ($mahasiswa) {
            return redirect()->route('app.pembayaran.index', $mahasiswa->id)->with('success', 'Pendaftaran berhasil');
        }
        return back()->with('error', 'Pendaftaran gagal');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::where('user_id', Auth::user()->id)->with('user', 'orangtua', 'sekolah', 'peminatan', 'pembayaran')->first();
        $pembayaran = Pembayaran::where('mahasiswa_id', $mahasiswa->id)->first();
        return view('app.pendaftaran.show', ['mahasiswa' => $mahasiswa, 'pembayaran' => $pembayaran]);
    }



    public function download($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        // $data = [
        //     'nama' => $mahasiswa->nama,
        //     'npm' => $mahasiswa->nim,
        //     'email' => $mahasiswa->email,
        //     'jenis_kelamin' => $mahasiswa->jenis_kelamin,
        //     'agama' => $mahasiswa->agama,
        //     'foto' => $mahasiswa->foto
        // ];
        $pdf = Pdf::loadView('app.pendaftaran.download', data: ['mahasiswa' => $mahasiswa]);
        return $pdf->download('kartu-mahasiswa' . $mahasiswa->nama . '.pdf');
    }
}
