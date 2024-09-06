@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stop

@section('content')
@if(session('success'))
<script>
    Swal.fire({
        title: "Berhasil",
        text: "{{session('success')}}",
        icon: "success"
    });
</script>
@endif
<div class="row gap-3">
    <div class="col-sm-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kontrak</h5>
                <p class="card-text">{{$kontrak}}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tetap</h5>
                <p class="card-text">{{$tetap}}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Perempuan</h5>
                <p class="card-text">{{$perempuan}}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Laki laki</h5>
                <p class="card-text">{{$laki}}</p>
            </div>
        </div>
    </div>
</div>
<a href="{{url('/create')}}" class="btn btn-primary">Tambah Data</a>
<table class="table" id="pegawai">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Divisi</th>
            <th scope="col">Tanggal Masuk</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pegawai as $index => $p)
        <tr>
            <td>{{$index+1}}</td>
            <td>{{$p->nama_pegawai}}</td>
            <td>{{$p->divisi}}</td>
            <td>{{$p->tanggal_masuk}}</td>
            <td>
                <a href="{{url('/update')}}/{{$p->id}}" class="btn btn-warning btn-sm">edit</a>
                <form id="delete-form-{{ $p->id }}" action="{{ route('pegawai.destroy', $p->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $p->id }})">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak dapat memulihkan data ini setelah dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika user mengonfirmasi, submit form
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
    $(document).ready(function() {
        // Inisialisasi DataTables pada tabel dengan ID 'pegawai'
        $('#pegawai').DataTable();
    });
</script>
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop