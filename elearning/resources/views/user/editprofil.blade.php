@extends('main.usertemplate')

@section('title')
<title>Edit Profile</title>
@endsection

@section('content')
    <div class="container my-2 ">
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

        <!-- container edit -->
        <div class="container mb-5 bg-light py-3">

                <div class="card card-body border-0">
                    
                    <form action="/user/updateprofile/{{$mahasiswa['NIK']}}" method="POST" class=" p-4">
                    {{-- <form action="{{ route('user.profile')}}" method="POST" class=" p-4"> --}}
                        @csrf
                        @method('PUT')
                                <input type="hidden" class="col form-control" id="NIK" name="NIK" value="{{$mahasiswa['NIK']}}">
                        
                        <!-- name -->
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="first_name" class="form-label">First name </label>
                            </div>
                            <div class="col">
                                <input type="text" class="col form-control" id="first_name" name="first_name" value="{{$mahasiswa['first_name']}}">
                            </div>
                        </div>
    
                        <!-- last name -->
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="last_name" class="form-label">Last Name </label>
                            </div>
                            <div class="col">
                                <input type="text"  class="col form-control" id="last_name" name="last_name" value="{{$mahasiswa['last_name']}}">
                            </div>
                        </div>

                        {{-- NIM --}}
                        {{-- <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="name" class="form-label">NIM </label>
                            </div>
                            <div class="col">
                                <input type="name" class="col form-control" id="disabledTextInput" value="{{$mahasiswa['NIM']}}" disabled>
                            </div>
                        </div> --}}

                        {{-- Birth date --}}
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="name" class="form-label">Birth date </label>
                            </div>
                            <div class="col">
                                <input type="date" class="col form-control" id="tgl_lahir" name="tgl_lahir" value="{{$mahasiswa['tgl_lahir']}}">
                            </div>
                        </div>

                        {{-- Gender --}}
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="name" class="form-label">Gender</label>
                            </div>
                            <div class="col">
                                <input type="text" class="col form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{$mahasiswa['jenis_kelamin']}}">
                            </div>
                        </div>

                        <!-- country -->
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="kewarganegaraan" class="form-label">Country </label>
                            </div>
                            <div class="col">
                                <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                </select>
                                {{-- <input type="text" class="col form-control" id="kewarganegaraan" name="kewarganegaraan" value="{{$mahasiswa['kewarganegaraan']}}" disabled> --}}
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="name" class="form-label">Address </label>
                            </div>
                            <div class="col">
                                <input type="text" class="col form-control" id="alamat" name="alamat" value="{{$mahasiswa['alamat']}}">
                            </div>
                        </div>

                        {{-- religion --}}
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="name" class="form-label">Religion </label>
                            </div>
                            <div class="col">
                                <input type="text" class="col form-control" id="agama" name="agama" value="{{$mahasiswa['agama']}}">
                            </div>
                        </div>
                        
                        <!-- email -->
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="email" class="form-label">Email address</label>
                            </div>
                            <div class="col">
                                <input type="email" class="col form-control" id="email" name="email" value="{{$mahasiswa['email']}}">
                            </div>
                        </div>
                        
                        <!-- password -->
                        <div class="row">
                            <div class="col-3 mb-3">
                                <label for="password" class="form-label">Password</label>
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" id="password" name="password" value="{{$mahasiswa['password']}}">
                            </div>
                        </div>
    
                        <!-- button -->
                        <div class="text-end px-3 pb-2 mx-4">
                            <button type="submit" class="btn btn-success ">Update Profile</button>
                            <a href="/user/profile"><button type="button" class="btn btn-secondary ">Cancel</button></a>
                        </div>
    
                        
                        
                    </form>
                </div>

                

        </div>
        <!-- end container edit -->
        

    </div>
@endsection