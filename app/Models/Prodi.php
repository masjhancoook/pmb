<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $guarded = ['id'];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }

    public function peminatan()
    {
        return $this->hasMany(Peminatan::class);
    }
}
