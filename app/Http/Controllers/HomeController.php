<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // mendapatkan semua data pegawai dengan query builder, dengan menggunakan all()
        $pegawai = Pegawai::all();

        // menghitung data kontrak, dengan query builder menggunakan where status pegawai
        $kontrak = Pegawai::where('status_pegawai', 'kontrak')->count();

        // menghitung data tetap, dengan query builder menggunakan where status pegawai
        $tetap = Pegawai::where('status_pegawai', 'tetap')->count();

        // menghitung data perempuan, dengan query builder menggunakan where jenis kelamin
        $perempuan = Pegawai::where('jenis_kelamin', 'P')->count();

        // menghitung data laki laki, dengan query builder menggunakan where jenis kelamin
        $laki = Pegawai::where('jenis_kelamin', 'L')->count();

        return view('admin.index', compact('pegawai', 'kontrak', 'tetap', 'laki', 'perempuan'));
    }
}
