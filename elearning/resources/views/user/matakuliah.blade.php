@extends('main.usertemplate')

@include('components.createpertemuan')

@section('title')
<title>Course : [TIF1207] Struktur Data Dan Algoritma - Kelas C</title>
@endsection

@section('content')

@foreach($kelas as $kls)
<div class="mx-5 px-5 my-4 pt-2 fw-bold fs-2">[{{$kls->mata_kuliah}}] {{$kls->nama_matkul}} - {{$kls->kelas}}</div>
@endforeach

{{-- dosen membuat pertemuan --}}
{{-- @if(auth()->user()->status === 'dosen') --}}
<div class="header-container">
   <div class="me-3 create-btn btn btn-outline-success align-items-center" data-bs-toggle="modal" data-bs-target="#add"><i class="fas fa-plus"></i> Pertemuan</div>
</div>
{{-- @endif --}}


<!--container -->
<div class="container my-4 bg-light py-3">

    <div class="row px-5 py-4">
    <a href="#" id="#" class="fw-bold fs-3 px-2 text-decoration-none" style=" color: #008b00;">General</a>
        <div class="media py-3 ml-0">
            <p>Selamat datang di Kelas SDA Kom C</p>
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="/user/absen" class="text-decoration-none text-success px-4">Daftar Hadir</a>
            </div>
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="#" class="text-decoration-none text-success px-4">Link Zoom</a>
            </div>
        </div>
        <hr class="">
    @foreach($pertemuan as $prtm)
    <a href="#" id="#" class="fw-bold pb-2 fs-3 px-2 text-decoration-none" style=" color: #008b00;">{{$prtm->nama_pertemuan}}</a>
        <div class="media py-3 ml-0">
            <p>{{$prtm->deskripsi}}</p>
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="#" class="text-decoration-none text-success px-4">Materi PPT</a>
            </div>
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="/user/tugas" class="text-decoration-none text-success px-4">Tugas Mandiri</a>
            </div>
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="/user/absen/{{$prtm->pertemuan_id}}" class="text-decoration-none text-success px-4">Daftar Hadir</a>
            </div>
        </div><hr>
    @endforeach
    </div>     
                   
</div>
<!--end container -->
@endsection
