@extends('main.usertemplate')

@section('title')
<title>Participants</title>
@endsection

@section('content')
    <div class="container my-4 bg-light py-3">
        <div class="text-center my-3 fw-bold pb-2 fs-2">Select Your Course</div>
        <div class="mx-3 px-2 my-2 py-2">
            <ul >
                <a href="/user/enrollmatkul" class="text-decoration-none text-success fw-bold fs-4"><li>S1- Teknologi Informasi</li></a>
                <a href="#" class="text-decoration-none text-success fw-bold fs-4"><li>S-1 Ilmu Komputer</li></a>
                <a href="#" class="text-decoration-none text-success fw-bold fs-4"><li>S-2 Teknik Informatika</li></a>
                <a href="#" class="text-decoration-none text-success fw-bold fs-4"><li>S-2 Sains Data dan Kecerdasan Buatan</li></a>
                <a href="#" class="text-decoration-none text-success fw-bold fs-4"><li>S-3 Ilmu Komputers</li></a>
            </ul>
        </div>

    </div>
@endsection