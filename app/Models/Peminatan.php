<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminatan extends Model
{
    protected $table = 'peminatan';
    protected $guarded = ['id'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
