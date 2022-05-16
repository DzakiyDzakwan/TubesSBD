@extends('main.usertemplate')

@include('components.createpertemuan')

@section('title')
<title>Course : [TIF1207] Struktur Data Dan Algoritma - Kelas C</title>
@endsection

@section('content')


<div class="mx-5 px-5 my-4 pt-2 fw-bold fs-2">[TIF1207] Struktur Data Dan Algoritma - Kelas C</div>


<div class="header-container">
   <div class="me-3 create-btn btn btn-outline-success align-items-center" data-bs-toggle="modal" data-bs-target="#add"><i class="fas fa-plus"></i> Pertemuan</div>

</div>


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

    <a href="#" id="#" class="fw-bold pb-2 fs-3 px-2 text-decoration-none" style=" color: #008b00;">Pertemuan 1</a>
        <div class="media py-3 ml-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod hendrerit mollis. Aliquam ornare vestibulum ipsum. Sed egestas tempor blandit. Donec eu porta ex, sit amet fermentum eros. Suspendisse tempor, lectus ut suscipit auctor, arcu libero feugiat tellus, mattis malesuada mauris dui vitae nisl. Etiam scelerisque, diam at malesuada maximus, dolor justo congue lacus, ut placerat justo dui non tortor. Nulla tincidunt ex pharetra eros ornare, ac posuere purus suscipit. Duis a egestas dui. Nulla velit turpis, tempor id mollis eget, euismod sed nulla. Vestibulum sit amet efficitur diam.</p>
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="#" class="text-decoration-none text-success px-4">Materi PPT</a>
            </div>
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="/user/tugas" class="text-decoration-none text-success px-4">Tugas Mandiri</a>
            </div>
        </div><hr>

    <a href="#" id="#" class="fw-bold pb-2 fs-3 px-2 text-decoration-none" style=" color: #008b00;">Pertemuan 2</a>
        <div class="media py-3 ml-0">
            
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="#" class="text-decoration-none text-success px-4">Materi PPT</a>
            </div>
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="#" class="text-decoration-none text-success px-4">Tugas Mandiri</a>
            </div>
        </div><hr>

    <a href="#" id="#" class="fw-bold pb-2 fs-3 px-2 text-decoration-none" style=" color: #008b00;">Pertemuan 3</a>
        <div class="media py-3 ml-0">
            
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="#" class="text-decoration-none text-success px-4">Materi PPT</a>
            </div>
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="#" class="text-decoration-none text-success px-4">Tugas Mandiri</a>
            </div>
        </div><hr>

    <a href="#" id="#" class="fw-bold pb-2 fs-3 px-2 text-decoration-none" style=" color: #008b00;">Pertemuan 4</a>
        <div class="media py-3 ml-0">
            
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="#" class="text-decoration-none text-success px-4">Materi PPT</a>
            </div>
            <div class="bg-secondary bg-opacity-10 py-2 mb-3 rounded-3" style="width: 300px;">
                <a href="#" class="text-decoration-none text-success px-4">Tugas Mandiri</a>
            </div>
        </div>   
    </div>     
                   
</div>
<!--end container -->
@endsection
