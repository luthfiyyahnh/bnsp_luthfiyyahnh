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
        $pegawai = Pegawai::all();
        // menghitung data kontrak
        $kontrak = Pegawai::where('status_pegawai', 'kontrak')->count();
        $tetap = Pegawai::where('status_pegawai', 'tetap')->count();
        $perempuan = Pegawai::where('jenis_kelamin', 'P')->count();
        $laki = Pegawai::where('jenis_kelamin', 'L')->count();

        return view('admin.index', compact('pegawai', 'kontrak', 'tetap', 'laki', 'perempuan'));
    }
}
