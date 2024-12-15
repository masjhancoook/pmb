<?php

namespace App\Http\Controllers\Admin\Pembayaran;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PembayaranController extends Controller
{
    public function render()
    {
        $check = Mahasiswa::where('user_id', Auth::user()->id)->count();
        if ($check > 0) {
            $pembayaran = Pembayaran::with('mahasiswa')->where('mahasiswa_id', Mahasiswa::where('user_id', Auth::user()->id)->first()->id)->get();
            return view('app.pembayaran.index', data: ['pembayaran' => $pembayaran,]);
        } else {
            $pembayarans = Pembayaran::with('mahasiswa')->get();
            return view('app.pembayaran.verifikasipembayaran', data: ['pembayarans' => $pembayarans]);
        }
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate(
            [
                'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'bukti_pembayaran.required' => 'Bukti pembayaran tidak boleh kosong',
                'bukti_pembayaran.image' => 'file harus berbentuk gambar',
                'bukti_pembayaran.mimes' => 'format file tidak sesuai',
                'bukti_pembayaran.max' => 'file harus berukuran max 2 MB',
            ],
        );

        if ($request->hasFile('bukti_pembayaran')) {
            $path = $request->file('bukti_pembayaran');
            $filename = now()->format('Y-m-d') . '-' . str_replace(' ', '-', Auth::user()->name) . '.' . $path->getClientOriginalExtension();
            $paths = $path->storeAs('pembayaran', $filename, 'public');
            $validated['bukti_pembayaran'] = $paths;
        } else {
            $$validated = '';
        }

        $pembayaran = Pembayaran::findOrFail($id);
        if ($pembayaran != $id || $pembayaran == null) {
            return redirect()->back()->with('error', 'Anda suda mengupload bukti pembayaran, silahkan tunggu konfirmasi');
        }
        $defaultstatus = 'Menunggu Konfirmasi...';
        $update = $pembayaran->update([
            'bukti_pembayaran' => $validated,
            'status' => $defaultstatus,
        ]);
        if ($update) {
            return redirect()->route('app.pembayaran.index')->with('success', 'Data berhasil diupdate');
        }

        return redirect()->route('app.pembayaran.index')->with('error', 'Data gagal diupdate');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
        ]);
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update([
            'status' => $request->status,
        ]);
        return redirect()->route('app.pembayaran.index')->with('success', 'Data berhasil diupdate');
    }

    public function verifikasipembayaran()
    {
        $pembayarans = Pembayaran::with('mahasiswa')->get();
        return view('app.pembayaran.verifikasipembayaran', data: ['pembayarans' => $pembayarans]);
    }
}
