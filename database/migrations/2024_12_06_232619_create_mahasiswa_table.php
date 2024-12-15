<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 20)->nullable()->uniqid();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string(column: 'kewarganegaraan');
            $table->string('foto')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('sekolah_id')->nullable()->constrained('sekolah')->cascadeOnDelete();
            $table->foreignId('orangtua_id')->nullable()->constrained('orangtua')->cascadeOnDelete();
            $table->foreignId('prodi_id')->nullable()->constrained('prodi');
            $table->foreignId('peminatan_id')->nullable()->constrained('peminatan')->cascadeOnDelete();
            $table->string('status')->nullable()->default(value: '-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
