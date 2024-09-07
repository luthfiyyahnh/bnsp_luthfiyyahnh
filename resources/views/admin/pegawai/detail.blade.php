@extends('adminlte::page')

@section('title', 'Detail')

@section('content_header')
<h1>Detail Pegawai {{$pegawai->nama_pegawai}}</h1>
@stop

@section('content')
<div class="container">
    <form action="{{ route('pegawai.update.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" value="{{$pegawai->id}}">
        <div class="mb-3">
            <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{$pegawai->nama_pegawai}}" readonly required>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$pegawai->tanggal_lahir}}" readonly required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{$pegawai->jenis_kelamin}}" class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{$pegawai->alamat}}" readonly required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$pegawai->email}}" readonly required>
        </div>

        <div class="mb-3">
            <label for="no_telepon" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{$pegawai->no_telepon}}" readonly required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$pegawai->jabatan}}" readonly required>
        </div>

        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <input type="text" class="form-control" id="divisi" name="divisi" value="{{$pegawai->divisi}}" readonly required>
        </div>

        <div class="mb-3">
            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{$pegawai->tanggal_masuk}}" readonly required>
        </div>

        <div class="mb-3">
            <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
            <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar" value="{{$pegawai->tanggal_keluar}}" readonly>
        </div>

        <div class="mb-3">
            <label for="status_pegawai" class="form-label">Status Pegawai</label>
            <input type="text" name="status_pegawai" id="status_pegawai" class="form-control" value="{{$pegawai->status_pegawai}}" readonly>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <!-- <input type="file" class="form-control" id="gambar" name="gambar"> -->
            <div>
                <img src="{{asset('images/pegawai')}}/{{$pegawai->gambar}}" class="w-50 h-50" alt="gambar">
            </div>
        </div>
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