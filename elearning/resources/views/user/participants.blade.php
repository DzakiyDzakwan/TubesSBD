@extends('main.usertemplate')

@section('title')
<title>Participants</title>
@endsection

@section('content')
    <div class="mx-5 px-5 my-4 pt-2 fw-bold fs-2">[TIF1207] Struktur Data Dan Algoritma - Kelas C</div>
    <div class="container my-4 bg-light py-3">
        <!-- border match -->
        <div class="fw-bold pb-2 fs-3 px-2">Participants</div>
        <div class="border mb-3 mt-2 mx-2 py-2 px-2  rounded-3">
            <div class=" row border my-3 mx-2 py-2 px-2  rounded-3">
                <div style=" width: 3rem">Match</div>
                <div class="col-2 mx-5">
                    <select class="form-select form-select-sm float-end" aria-label=".form-select-sm example" style="width: 9rem;">
                        <option selected>None</option>
                        <option value="1">Any</option>
                        <option value="2">All</option>
                      </select>
                </div>
                <div class="col-2 ">
                    <select class="form-select form-select-sm float-start" aria-label=".form-select-sm example" style="width: 9rem;">
                        <option selected>Select</option>
                        <option value="1">Keyword</option>
                        <option value="2">Roles</option>
                        <option value="3">Inactive for more than</option>
                      </select>
                </div>
                <!-- tombol close -->
                <div class="col">
                    <button type="button" class="btn-close float-end" aria-label="Close"></button>
                </div>
            </div>
            <!-- button -->
            <div class="text-end px-2 pb-2">
                <button type="button" class="btn btn-secondary ">Clear Filter</button>
                <button type="button" class="btn btn-success ">Apply Filter</button>
            </div>
        </div>
        <!-- end border match -->

        <!-- pagination first name -->
        <div class="row px-2">
            <div class="col-1"><a>First Name</a></div>
            <div class="col text-start">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm text-decoration-none text-success">
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">All</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">A</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">B</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">C</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">D</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">E</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">...</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">V</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">W</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">X</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">Y</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">Z</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- end pagination first name -->
        
        <!-- pagination surname -->
        <div class="row px-2">
            <div class="col-1"><a>Surname</a></div>
            <div class="col text-start">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm text-decoration-none text-success">
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">All</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">A</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">B</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">C</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">D</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">E</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">...</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">V</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">W</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">X</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">Y</a></li>
                      <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">Z</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- end pagination surname -->

        <hr > 
        <!-- tabel -->
        <div class="px-3">
        <table class="table table-striped">
            <thead>
                <!-- judul tabel -->
            <tr>
                <th>First name/Surname</th>
                <th>Roles</th>
                <th>Groups</th>
                <th width="20%">Last access to course</th>
            </tr>
            </thead>
            <tr>
                <td><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="rounded-circle px-2" width="50px"><a href="" class="text-decoration-none text-success fw-bold">Lorem Ipsum 211402000</a></td>
                <td>Student</td>
                <td>No groups</td>
                <td>Never</td>
            </tr>
            <tr>
                <td><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="rounded-circle px-2" width="50px"><a href="" class="text-decoration-none text-success fw-bold">Lorem Ipsum 211402001</a></td>
                <td>Student</td>
                <td>No groups</td>
                <td>Never</td>
            </tr>
            <tr>
                <td><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="rounded-circle px-2" width="50px"><a href="" class="text-decoration-none text-success fw-bold">Lorem Ipsum 211402002</a></td>
                <td>Student</td>
                <td>No groups</td>
                <td>Never</td>
            </tr>
            <tr>
                <td><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="rounded-circle px-2" width="50px"><a href="" class="text-decoration-none text-success fw-bold">Lorem Ipsum 211402003</a></td>
                <td>Student</td>
                <td>No groups</td>
                <td>Never</td>
            </tr>
            <tr>
                <td><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="rounded-circle px-2" width="50px"><a href="" class="text-decoration-none text-success fw-bold">Lorem Ipsum 211402004</a></td>
                <td>Student</td>
                <td>No groups</td>
                <td>Never</td>
            </tr>
        </table>
        </div>
        <!-- end table -->

        <!-- pagination tabel-->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center text-decoration-none text-success">
              <li class="page-item">
                <a class="page-link text-decoration-none text-success" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">1</a></li>
              <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">2</a></li>
              <li class="page-item"><a class="page-link text-decoration-none text-success" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link text-decoration-none text-success" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
        </nav>
        <!-- end pagination tabel-->
    </div>
@endsection