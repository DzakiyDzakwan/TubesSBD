@extends('main.usertemplate')

@section('title')
<title>Profile</title>
@endsection

@section('content')

    <!-- START CONTAINER-->
    <div class="container my-2 "> 

        {{-- Mahasiswa --}}
        @if (auth()->user()->status === 'mahasiswa') 
            <!--PROFIL MAHASISWA-->
        <!--profil dan nama-->
        <div class="row py-3">
            <div class="col-1">
              <div ><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="rounded-circle float-end" width="100px"></div>
            </div>
            <div class="col pl-3">
                
                 {{-- <h1>{{$profil['first_name']}} {{$profil['last_name']}} {{$profil['NIM']}}</h1> --}}
                 <h1>{{auth()->user()->first_name}} {{auth()->user()->last_name}}
                    {{-- {{$editprofil->NIM}} --}}
                </h1>
                
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

                        @foreach ($profil as $profil)

                        <a href="/user/editprofil/{{$profil->id}}" class="text-decoration-none text-success"><p>Edit Profile</p></a>
                        <p class="fw-bold pt-2">Birth date</p>
                        <a >{{$profil['tgl_lahir']}}</a>
                        <p class="fw-bold pt-2">Gender</p>
                        <a href="" class="text-decoration-none text-success">{{$profil['jenis_kelamin']}}</a>
                        <p class="fw-bold pt-2">Country</p>
                        <p>{{$profil['kewarganegaraan']}}</p>
                        <p class="fw-bold pt-2">Address</p>
                        <p>{{$profil['alamat']}}</p>
                        <p class="fw-bold pt-2">Religion</p>
                        <a >{{$profil['agama']}}</a>
                        <p class="fw-bold pt-2">Email address</p>
                        <a href="" class="text-decoration-none text-success">{{$profil['email']}}</a>
                        <p class="fw-bold pt-2">Phone number</p>
                        <a>{{$profil['nomor_hp']}}</a>

                        @endforeach
                        
                        
                    </div>
                    <!-- end user detail -->


                    
                  
                </div>
                <!-- end kolom kiri -->

                <!-- kolom kanan -->
                <div class="col">
                    <div class="pt-3 lh-1">
                        <p class="fw-bold pb-3 fs-5">Course details</p>
                        <p class="fw-bold ">Course profiles</p>
                        @foreach ($kelas as $enrol)

                        <a href="#" class="text-decoration-none text-success"><p>[{{$enrol->kode_mata_kuliah}}] {{$enrol->nama_matkul}} - Kelas {{$enrol->kelas}}</p></a>
                            
                        @endforeach
                        {{-- <a href="" class="text-decoration-none text-success"><p>[TIF1207] Struktur Data Dan Algoritma - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1205] Sistem Basis Data - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1203] Pemrograman Web Lanjutan - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1201] Pemrograman Berorientasi Objek - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1208] Praktikum Struktur Data Dan Algoritma - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1206] Praktikum Sistem Basis Data - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1204] Praktikum Pemrograman Web Lanjutan - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1202] Praktikum Pemrograman Berorientasi Objek - Kelas C</p></a> --}}
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

        @elseif(auth()->user()->status === 'dosen')

        <!--PROFIL DOSEN-->
        <!--profile dan nama -->
        <div class="row py-3">
            <div class="col-1">
              <div ><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="rounded-circle float-end" width="100px"></div>
            </div>
            <div class="col pl-3">
                
                <h1>{{auth()->user()->first_name}} {{auth()->user()->last_name}} </h1>
                
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

                        @foreach ($profil as $profil)
                        <a href="/user/editprofil/{{$profil['id']}}" class="text-decoration-none text-success"><p>Edit Profile</p></a>
                        <p class="fw-bold pt-2">Birth date</p>
                        <a >{{$profil['tgl_lahir']}}</a>
                        <p class="fw-bold pt-2">Gender</p>
                        <a href="" class="text-decoration-none text-success">{{$profil['jenis_kelamin']}}</a>
                        <p class="fw-bold pt-2">Country</p>
                        <p>{{$profil['kewarganegaraan']}}</p>
                        <p class="fw-bold pt-2">Address</p>
                        <p>{{$profil['alamat']}}</p>
                        <p class="fw-bold pt-2">Religion</p>
                        <a >{{$profil['agama']}}</a>
                        <p class="fw-bold pt-2">Email address</p>
                        <a href="" class="text-decoration-none text-success">{{$profil['email']}}</a>
                        <p class="fw-bold pt-2">Phone number</p>
                        <a>{{$profil['nomor_hp']}}</a>
                        @endforeach
                    </div>
                    <!-- end user detail -->


                    
                  
                </div>
                <!-- end kolom kiri -->

                <!-- kolom kanan -->
                <div class="col">
                    <div class="pt-3 lh-1">
                        <p class="fw-bold pb-3 fs-5">Course details</p>
                        <p class="fw-bold ">Course profiles</p>
                        @foreach ($kelas as $kls)

                        <a href="#" class="text-decoration-none text-success"><p>[{{$kls->kode_mata_kuliah}}] {{$kls->nama_matkul}} - Kelas {{$kls->kelas}}</p></a>
                            
                        @endforeach
                        {{-- <a href="" class="text-decoration-none text-success"><p>[TIF1207] Struktur Data Dan Algoritma - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1205] Sistem Basis Data - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1203] Pemrograman Web Lanjutan - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1201] Pemrograman Berorientasi Objek - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1208] Praktikum Struktur Data Dan Algoritma - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1206] Praktikum Sistem Basis Data - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1204] Praktikum Pemrograman Web Lanjutan - Kelas C</p></a>
                        <a href="" class="text-decoration-none text-success"><p>[TIF1202] Praktikum Pemrograman Berorientasi Objek - Kelas C</p></a> --}}
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

        @endif

        

    </div>
    <!-- CONTAINER END-->


    

    
@endsection

