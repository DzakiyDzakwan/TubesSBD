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
                <h1>Lorem Ipsum 211402000</h1>
                <div class="row"></div>
              <p></p>
            </div>
        </div>
        <!-- end profile dan nama -->

        <!-- container edit -->
        <div class="container mb-5 bg-light py-4">
            <div class="fw-bold pb-2 fs-4 px-3">Lorem Ipsum 211402000</div>

                <div class="card card-body border-0">
                    <form class=" p-4">
                        <!-- name -->
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="name" class="form-label">First name </label>
                            </div>
                            <div class="col">
                                <input type="name" class="col form-control" id="name" placeholder="your name">
                            </div>
                        </div>
    
                        <!-- surname -->
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="name" class="form-label">Surname </label>
                            </div>
                            <div class="col">
                                <input type="name" class="col form-control" id="name">
                            </div>
                        </div>
                        
                        <!-- email -->
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="email" class="form-label">Email address</label>
                            </div>
                            <div class="col">
                                <input type="email" class="col form-control" id="email" placeholder="email@example.com">
                            </div>
                        </div>
                        
                        <!-- password -->
                        <div class="row">
                            <div class="col-3 mb-3">
                                <label for="password" class="form-label">Password</label>
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
    
                        <!-- city/town -->
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="name" class="form-label">City/town </label>
                            </div>
                            <div class="col">
                                <input type="name" class="col form-control" id="name">
                            </div>
                        </div>
    
                        <!-- country -->
                        <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="name" class="form-label">Country </label>
                            </div>
                            <div class="col">
                                <input type="name" class="col form-control" id="name">
                            </div>
                        </div>
                        
                    </form>
                </div>

                <!-- button -->
                <div class="text-end px-3 pb-2 mx-4">
                    <button type="button" class="btn btn-success ">Update Profile</button>
                    <button type="button" class="btn btn-secondary ">Cancel</button>
                </div>

        </div>
        <!-- end container edit -->
        

    </div>
@endsection