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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['P', 'L']);
            $table->string('alamat');
            $table->string('email');
            $table->string('no_telepon');
            $table->string('jabatan');
            $table->string('divisi');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->enum('status_pegawai', ['tetap', 'kontrak']);
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
