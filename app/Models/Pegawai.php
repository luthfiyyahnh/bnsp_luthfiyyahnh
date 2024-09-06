<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    //untuk memanggil tabel
    protected $table = 'pegawai';

    //untuk memanggil kolom
    protected $fillable = ['nama_pegawai', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'email', 'no_telepon', 'jabatan', 'divisi', 'tanggal_masuk', 'tanggal_keluar', 'status_pegawai', 'gambar'];
}
