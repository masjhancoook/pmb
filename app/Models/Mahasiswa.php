<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $guarded = ['id'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    public function orangtua()
    {
        return $this->belongsTo(Orangtua::class);
    }

    public function peminatan()
    {
        return $this->belongsTo(Peminatan::class);
    }

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function verifikasi()
    {
        return $this->belongsTo(Verifikasi::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(related: Pembayaran::class);
    }
}
