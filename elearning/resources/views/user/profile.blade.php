@extends('main.usertemplate')

@section('title')
<title>Profile</title>
@endsection

@section('content')

    <!-- START CONTAINER-->
    <div class="container my-2 "> 

        <!--PROFIL MAHASISWA-->
        <!--profil dan nama-->
        <div class="row py-3">
            <div class="col-1">
              <div ><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="rounded-circle float-end" width="100px"></div>
            </div>
            <div class="col pl-3">
                
                 <h1>{{$mahasiswa['first_name']}} {{$mahasiswa['last_name']}} {{$mahasiswa['NIM']}}</h1>
                
                <div class="row"></div>
              <p></p>
            </div>
        </div>
        <!-- end profile dan nama -->

        <div class="container mb-5 bg-light">
            <div class="row px-5 py-4 ">
                <!-- kolom kiri -->
                <div class="col">
                    <!-- user detail -->
                    <div class="py-3 lh-1">
                        <p class="fw-bolder pb-3 fs-5">User Details</p>
                        <a href="/user/editprofil/{{$mahasiswa->NIK}}" class="text-decoration-none text-success"><p>Edit Profile</p></a>
                        <p class="fw-bold pt-2">Birth date</p>
                        <a >{{$mahasiswa['tgl_lahir']}}</a>
                        <p class="fw-bold pt-2">Gender</p>
                        <a href="" class="text-decoration-none text-success">{{$mahasiswa['jenis_kelamin']}}</a>
                        <p class="fw-bold pt-2">Country</p>
                        <p>{{$mahasiswa['kewarganegaraan']}}</p>
                        <p class="fw-bold pt-2">Address</p>
                        <p>{{$mahasiswa['alamat']}}</p>
                        <p class="fw-bold pt-2">Religion</p>
                        <a >{{$mahasiswa['agama']}}</a>
                        <p class="fw-bold pt-2">Email address</p>
                        <a href="" class="text-decoration-none text-success">{{$mahasiswa['email']}}</a>
                        <p class="fw-bold pt-2">Phone number</p>
                        <a>{{$mahasiswa['nomor_hp']}}</a>
                        {{-- <p class="fw-bold pt-2">Jurusan</p>
                        <a>{{$mahasiswa['nama_jurusan']}}</a> --}}
                    </div>
                    <!-- end user detail -->


                    
                  
                </div>
                <!-- end kolom kiri -->

                <!-- kolom kanan -->
                <div class="col">
                    <div class="pt-3 lh-1">
                        <p class="fw-bold pb-3 fs-5">Course details</p>
                        <p class="fw-bold ">Course profiles</p>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1207] Struktur Data Dan Algoritma - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1205] Sistem Basis Data - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1203] Pemrograman Web Lanjutan - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1201] Pemrograman Berorientasi Objek - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1208] Praktikum Struktur Data Dan Algoritma - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1206] Praktikum Sistem Basis Data - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1204] Praktikum Pemrograman Web Lanjutan - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1202] Praktikum Pemrograman Berorientasi Objek - Kelas C</p></a>
                    </div>

                    <div class="py-3 lh-1">
                        <p class="fw-bold pb-2 fs-5">Reports</p>
                        <a href="" class="text-decoration-none text-success"><p>Browser sessions</p></a>
                        <a href="" class="text-decoration-none text-success"><p>Grades overview</p></a>
                    </div>

                </div>
                <!-- end kolom kanan -->
            </div>
        </div>
        <!-- MAHASISWA END -->

        <!--PROFIL DOSEN-->
        <!--profile dan nama -->
        <div class="row py-3">
            <div class="col-1">
              <div ><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="rounded-circle float-end" width="100px"></div>
            </div>
            <div class="col pl-3">
                
                <h1>{{$dosen['first_name']}} {{$dosen['last_name']}} {{$dosen['NIP']}} </h1>
                
                <div class="row"></div>
              <p></p>
            </div>
        </div>
        <!-- end profile dan nama -->

        <div class="container mb-5 bg-light">
            <div class="row px-5 py-4 ">
                <!-- kolom kiri -->
                <div class="col">
                    <!-- user detail -->
                    <div class="py-3 lh-1">
                        <p class="fw-bolder pb-3 fs-5">User Details</p>
                        <a href="/user/editprofil" class="text-decoration-none text-success"><p>Edit Profile</p></a>
                        <p class="fw-bold pt-2">Birth date</p>
                        <a >{{$dosen['tgl_lahir']}}</a>
                        <p class="fw-bold pt-2">Gender</p>
                        <a href="" class="text-decoration-none text-success">{{$dosen['jenis_kelamin']}}</a>
                        <p class="fw-bold pt-2">Country</p>
                        <p>{{$dosen['kewarganegaraan']}}</p>
                        <p class="fw-bold pt-2">Address</p>
                        <p>{{$dosen['alamat']}}</p>
                        <p class="fw-bold pt-2">Religion</p>
                        <a >{{$dosen['agama']}}</a>
                        <p class="fw-bold pt-2">Email address</p>
                        <a href="" class="text-decoration-none text-success">{{$dosen['email']}}</a>
                        <p class="fw-bold pt-2">Phone number</p>
                        <a>{{$dosen['no_hp']}}</a>
                    </div>
                    <!-- end user detail -->


                    
                  
                </div>
                <!-- end kolom kiri -->

                <!-- kolom kanan -->
                <div class="col">
                    <div class="pt-3 lh-1">
                        <p class="fw-bold pb-3 fs-5">Course details</p>
                        <p class="fw-bold ">Course profiles</p>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1207] Struktur Data Dan Algoritma - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1205] Sistem Basis Data - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1203] Pemrograman Web Lanjutan - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1201] Pemrograman Berorientasi Objek - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1208] Praktikum Struktur Data Dan Algoritma - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1206] Praktikum Sistem Basis Data - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1204] Praktikum Pemrograman Web Lanjutan - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1202] Praktikum Pemrograman Berorientasi Objek - Kelas C</p></a>
                    </div>

                    <div class="py-3 lh-1">
                        <p class="fw-bold pb-2 fs-5">Reports</p>
                        <a href="" class="text-decoration-none text-success"><p>Browser sessions</p></a>
                        <a href="" class="text-decoration-none text-success"><p>Grades overview</p></a>
                    </div>

                    
                </div>
                <!-- end kolom kanan -->
            </div>

        </div>
        <!--DOSEN END-->

    </div>
    <!-- CONTAINER END-->


    

    
@endsection

