@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Form Update Pegawai</h1>
@stop

@section('content')
<div class="container">
    <form action="{{ route('pegawai.update.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" value="{{$pegawai->id}}">
        <div class="mb-3">
            <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{$pegawai->nama_pegawai}}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$pegawai->tanggal_lahir}}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{$pegawai->jenis_kelamin}}" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{$pegawai->alamat}}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$pegawai->email}}" required>
        </div>

        <div class="mb-3">
            <label for="no_telepon" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{$pegawai->no_telepon}}" required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$pegawai->jabatan}}" required>
        </div>

        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <input type="text" class="form-control" id="divisi" name="divisi" value="{{$pegawai->divisi}}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{$pegawai->tanggal_masuk}}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
            <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar" value="{{$pegawai->tanggal_keluar}}">
        </div>

        <div class="mb-3">
            <label for="status_pegawai" class="form-label">Status Pegawai</label>
            <select class="form-control" id="status_pegawai" name="status_pegawai" value="{{$pegawai->status_pegawai}}" required>
                <option value="tetap">Tetap</option>
                <option value="kontrak">Kontrak</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            <div>
                <img src="{{asset('images/pegawai')}}/{{$pegawai->gambar}}" class="w-50 h-50" alt="gambar">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop