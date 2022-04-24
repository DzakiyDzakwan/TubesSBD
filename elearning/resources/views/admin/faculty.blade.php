@extends('main.admintemplate')
  @section('css')
  <link rel="stylesheet" href="{{asset('css/sidebar.css')}}" />
  <link rel="stylesheet" href="{{asset('css/fakultas.css')}}" />
  @endsection

  @section('title')
    <title>Fakultas</title>
  @endsection

   <!-- ALERT -->
   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    <strong>Kode Fakultas</strong> Sudah tersedia.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <!-- ALERT END -->

  @section('content')
      <!-- FAKULTAS CONTAINER -->
      <div class="container fakultas my-3 p-3">
        <h3>Data Fakultas</h3>
        <div class="container d-flex" style="border: 1px solid; height: 400px">
          <div class="form-fakultas p-2">
            <h5 class="text-center fw-bold">Create Fakultas</h5>
            <form action="" method="POST" class="text-dark py-3 fw-bold">
              <label for="id">Kode Fakultas</label>
              <input class="form-control" type="text" name="id" id="id" />
              <label for="nama" class="my-2">Nama Fakultas</label>
              <input class="form-control" type="text" name="" id="nama" />
              <input class="btn btn-success my-3 form-control" type="submit" value="SUBMIT" />
            </form>
          </div>
          <div class="table-fakultas overflow-auto py-2 px-5">
            <h5 class="text-center sticky-top bg-white fw-bold">Table Fakultas</h5>
            <table class="table text-center">
              <thead>
                <tr>
                  <th>Kode Fakultas</th>
                  <th>Nama Fakultas</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($fakultas as $fklts)
                <tr>
                  <td>{{$fklts['kode_fakultas']}}</td>
                  <td>{{$fklts['nama_fakultas']}}</td>
                  <td>
                    <a href="" class="text-decoration-none">
                      <div class="btn btn-primary">
                        <i class="bx bx-edit-alt"></i>
                      </div>
                    </a>
                    <a href="" class="text-decoration-none">
                      <div class="btn btn-danger">
                        <i class="bx bx-trash"></i>
                      </div>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- FAKULTAS CONTAINER END -->

      <!-- Jurusan CONTAINER -->
      <div class="container fakultas my-3 p-3">
        <h3>Data Jurusan</h3>
        <div class="container d-flex" style="border: 1px solid; height: 400px">
          <div class="form-fakultas p-2">
            <h5 class="text-center fw-bold">Create Jurusan</h5>
            <form action="" method="POST" class="text-dark py-3 fw-bold">
              <label for="id">Kode Jurusan</label>
              <input class="form-control" type="text" name="id" id="id" />
              <label for="nama" class="my-2">Nama Jurusan</label>
              <input class="form-control" type="text" name="jurusan_name" id="nama" />
              <label for="fakultas">Fakultas</label>
              <select class="form-select" aria-label="Default select example" id="fakultas">
                @foreach ($fakultas as $fklts)
                <option value="{{$fklts['kode_fakultas']}}">{{$fklts['nama_fakultas']}}</option>
                @endforeach
              </select>
              <input class="btn btn-success my-3 form-control" type="submit" value="SUBMIT" />
            </form>
          </div>
          <div class="table-fakultas overflow-auto py-2 px-5">
            <h5 class="text-center sticky-top bg-white fw-bold">Table Jurusan</h5>
            <table class="table text-center">
              <thead>
                <tr>
                  <th>Kode Jurusan</th>
                  <th>Nama Jurusan</th>
                  <th>Fakultas</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($jurusans as $jurusan)
                <tr>
                  <td>{{$jurusan['kode_jurusan']}}</td>
                  <td>{{$jurusan['nama_jurusan']}}</td>
                  <td>{{$jurusan['nama_fakultas']}}</td>
                  <td>
                    <a href="" class="text-decoration-none">
                      <div class="btn btn-primary">
                        <i class="bx bx-edit-alt"></i>
                      </div>
                    </a>
                    <a href="" class="text-decoration-none">
                      <div class="btn btn-danger">
                        <i class="bx bx-trash"></i>
                      </div>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Jurusan CONTAINER END -->

      <!-- Matakuliah CONTAINER -->
      <div class="container fakultas my-3 p-3">
        <h3>Data Matakuliah</h3>
        <div class="container d-flex" style="border: 1px solid; height: 400px">
          <div class="form-fakultas p-2">
            <h5 class="text-center fw-bold">Create Matakuliah</h5>
            <form action="" method="POST" class="text-dark py-3 fw-bold">
              <label for="id">Kode Matakuliah</label>
              <input class="form-control" type="text" name="id" id="id" />
              <label for="nama" class="my-2">Nama Matakuliah</label>
              <input class="form-control" type="text" name="jurusan_name" id="nama_matkul" />
              <label for="fakultas">Jurusan</label>
              <select class="form-select" aria-label="Default select example" id="jurusan">
                <option selected>Tes</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <input class="btn btn-success my-3 form-control" type="submit" value="SUBMIT" />
            </form>
          </div>
          <div class="table-fakultas overflow-auto py-2 px-5">
            <h5 class="text-center sticky-top bg-white fw-bold">Table Matakuliah</h5>
            <table class="table text-center">
              <thead>
                <tr>
                  <th>Kode Matakuliah</th>
                  <th>Nama Matakuliah</th>
                  <th>Jurusan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>MK001</td>
                  <td>Pengantar Ilmu Kedokteran</td>
                  <td>Ilmu Kedokteran</td>
                  <td>
                    <a href="" class="text-decoration-none">
                      <div class="btn btn-primary">
                        <i class="bx bx-edit-alt"></i>
                      </div>
                    </a>
                    <a href="" class="text-decoration-none">
                      <div class="btn btn-danger">
                        <i class="bx bx-trash"></i>
                      </div>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Matakuliah CONTAINER END -->

      <!-- Matakuliah CONTAINER -->
      <div class="container fakultas my-3 p-3">
        <h3>Data Kelas</h3>
        <div class="container d-flex" style="border: 1px solid; height: 400px">
          <div class="form-fakultas p-2">
            <h5 class="text-center fw-bold">Create Kelas</h5>
            <form action="" method="POST" class="text-dark py-3 fw-bold">
              <label for="id">Kode Kelas</label>
              <input class="form-control" type="text" name="id" id="id" />
              <label for="nama" class="my-2">Nama Kelas</label>
              <input class="form-control" type="text" name="jurusan_name" id="nama_matkul" />
              <label for="fakultas">Matakuliah</label>
              <select class="form-select" aria-label="Default select example" id="jurusan">
                <option selected>Tes</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <label for="fakultas">Dosen</label>
              <select class="form-select" aria-label="Default select example" id="jurusan">
                <option selected>Tes</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <input class="btn btn-success my-3 form-control" type="submit" value="SUBMIT" />
            </form>
          </div>
          <div class="table-fakultas overflow-auto py-2 px-5">
            <h5 class="text-center sticky-top bg-white fw-bold">Table Kelas</h5>
            <table class="table text-center">
              <thead>
                <tr>
                  <th>Kode Kelas</th>
                  <th>Nama Kelas</th>
                  <th>Dosen</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>K001</td>
                  <td>Pengantar Ilmu Kedokteran</td>
                  <td>Budiman</td>
                  <td>
                    <a href="" class="text-decoration-none">
                      <div class="btn btn-primary">
                        <i class="bx bx-edit-alt"></i>
                      </div>
                    </a>
                    <a href="" class="text-decoration-none">
                      <div class="btn btn-danger">
                        <i class="bx bx-trash"></i>
                      </div>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Matakuliah CONTAINER END -->
  @endsection