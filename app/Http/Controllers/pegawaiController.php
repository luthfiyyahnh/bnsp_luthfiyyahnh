<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class pegawaiController extends Controller
{
    public function index()
    {
        return view('admin.pegawai.create');
    }
    public function update($id)
    {
        $pegawai = Pegawai::find($id);
        if (!$pegawai) {
            return redirect('/home')->with('error', 'id tidak ditemukan');
        }

        return view('admin.pegawai.update', compact('pegawai'));
    }

    //buat data baru
    public function store(Request $request)
    {
        $pegawai = new Pegawai;
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->alamat = $request->alamat;
        $pegawai->email = $request->email;
        $pegawai->no_telepon = $request->no_telepon;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->divisi = $request->divisi;
        $pegawai->tanggal_masuk = $request->tanggal_masuk;
        $pegawai->tanggal_keluar = $request->tanggal_keluar;
        $pegawai->status_pegawai = $request->status_pegawai;

        // Jika ada gambar yang diunggah, simpan gambar tersebut
        if ($request->hasFile('gambar')) {
            $fileName = time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/pegawai'), $fileName);
            $pegawai->gambar = $fileName;
        }

        $pegawai->save(); // Simpan data pegawai ke database

        // Redirect kembali dengan pesan sukses
        return redirect('/home')->with('success', 'Data pegawai berhasil disimpan.');
    }

    //sava data hasil update
    public function update_save(Request $request)
    {
        $pegawai = Pegawai::find($request->id);
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->alamat = $request->alamat;
        $pegawai->email = $request->email;
        $pegawai->no_telepon = $request->no_telepon;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->divisi = $request->divisi;
        $pegawai->tanggal_masuk = $request->tanggal_masuk;
        $pegawai->tanggal_keluar = $request->tanggal_keluar;
        $pegawai->status_pegawai = $request->status_pegawai;

        // Jika ada gambar yang diunggah, simpan gambar tersebut
        if ($request->hasFile('gambar')) {
            $fileName = time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/pegawai'), $fileName);
            $pegawai->gambar = $fileName;
        }

        $pegawai->save(); // Simpan data pegawai ke database

        // Redirect kembali dengan pesan sukses
        return redirect('/home')->with('success', 'Data pegawai berhasil disimpan.');
    }

    //untuk hapus data
    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return redirect('/home')->with('success', 'Data pegawai berhasil dihapus.');
    }
}
