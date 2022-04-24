@extends('main.usertemplate')

@section('title')
<title>Profile</title>
@endsection

@section('content')
    <div class="container my-2 "> 
        
        <!--profil dan nama-->
        <div class="row py-3">
            <div class="col-1">
              <div ><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="rounded-circle float-end" width="100px"></div>
            </div>
            <div class="col pl-3">
                <h1>Lorem Ipsum 211402000</h1>
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
                        <p class="fw-bold pt-2">Email address</p>
                        <a href="" class="text-decoration-none text-success">loremipsum@gmail.com</a>
                        <p class="fw-bold pt-4">Country</p>
                        <p>Indonesia</p>
                        <p class="fw-bold pt-2">City/town</p>
                        <p>Medan</p>
                    </div>
                    <!-- end user detail -->

                    <div class="py-3 lh-1">
                        <p class="fw-bold pb-3 fs-5"> Privacy and policies</p>
                        <a href="" class="text-decoration-none text-success"><p>Data retention summary</p></a>
                    </div>

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
                  
                </div>
                <!-- end kolom kiri -->

                <!-- kolom kanan -->
                <div class="col">
                    <div class="py-3 lh-1">
                        <p class="fw-bold pb-2 fs-5">Miscellaneous</p>
                        <a href="" class="text-decoration-none text-success"><p>Blog entries</p></a>
                        <a href="" class="text-decoration-none text-success"><p>My certificates</p></a>
                        <a href="" class="text-decoration-none text-success"><p>Forum posts</p></a>
                        <a href="" class="text-decoration-none text-success"><p>Forum discussions</p></a>
                        <a href="" class="text-decoration-none text-success"><p>My certificates</p></a>
                        <a href="" class="text-decoration-none text-success"><p>Learning plans</p></a>
                    </div>

                    <div class="py-3 lh-1">
                        <p class="fw-bold pb-2 fs-5">Reports</p>
                        <a href="" class="text-decoration-none text-success"><p>Browser sessions</p></a>
                        <a href="" class="text-decoration-none text-success"><p>Grades overview</p></a>
                    </div>

                    <div class="py-3 lh-1">
                        <p class="fw-bold fs-5">Login activity</p>
                        <p class="fw-bold pt-2">First access to site</p>
                        <p>Monday, 16 August 2021</p>
                        <p class="fw-bold pt-2">Last access to site</p>
                        <p>Friday, 8 April 2022</p>
                    </div>
                </div>
                <!-- end kolom kanan -->
            </div>


        </div>

    </div>
@endsection
