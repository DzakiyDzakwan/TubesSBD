@extends('main.admintemplate')
  @section('css')
  <link rel="stylesheet" href="{{asset('css/sidebar.css')}}" />
  <link rel="stylesheet" href="{{asset('css/fakultas.css')}}" />
  @endsection

  @section('title')
    <title>Fakultas</title>
  @endsection

   <!-- ALERT -->
   {{-- <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    <strong>Kode Fakultas</strong> Sudah tersedia.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> --}}
  <!-- ALERT END -->

   <!-- ALERT -->
   @error('kode_fakultas')
   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
     {{-- <strong>Kode Fakultas</strong> Tidak boleh Kosong. --}}
     {{$message}}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>  
   @enderror

   @error('nama_fakultas')
   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
     {{-- <strong>Nama Fakultas</strong> Tidak boleh Kosong. --}}
     {{$message}}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>  
   @enderror

   @error('kode_jurusan')
   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
     {{-- <strong>Kode Fakultas</strong> Tidak boleh Kosong. --}}
     {{$message}}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>  
   @enderror

   @error('nama_jurusan')
   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
     {{-- <strong>Nama Jurusan</strong> Tidak boleh Kosong. --}}
     {{$message}}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>  
   @enderror

   @error('kode_mata_kuliah')
   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
     {{-- <strong>Kode Matkul</strong> Tidak boleh Kosong. --}}
     <strong>{{$message}}</strong>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>  
   @enderror

   @error('nama_matkul')
   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
     {{-- <strong>Nama Mata Kuliah</strong> Tidak boleh Kosong. --}}
     <strong>{{$message}}</strong>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>  
   @enderror

   @error('sks')
   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
     {{-- <strong>SKS</strong> Tidak boleh Kosong. --}}
     {{$message}}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>  
   @enderror

   @error('kelas_id')
   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
     {{-- <strong>SKS</strong> Tidak boleh Kosong. --}}
     <strong>{{$message}}</strong>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>  
   @enderror
   <!-- ALERT END -->

  @section('content')
      <!-- FAKULTAS CONTAINER -->
      <div class="container fakultas my-3 p-3">
        <h3>Data Fakultas</h3>
        <div class="container d-flex" style="border: 1px solid; height: 400px">
          <div class="form-fakultas p-2">
            <h5 class="text-center fw-bold">Edit Fakultas</h5>
            @foreach ($fakultas as $fklts)
            <form action="/admin/{{ $fklts->kode_fakultas }}" method="POST" class="text-dark py-3 fw-bold">
            @endforeach
            @method('put')
              @csrf
              {{-- @foreach ($fakultas as $faculty) --}}
              <label for="id">Kode Fakultas</label>
              <input class="form-control @error('kode_fakultas') is-invalid @enderror" type="text" name="kode_fakultas" id="id" autocomplete="off" value="{{ old('kode_fakultas', $fakultas->kode_fakultas) }}"/>
              <label for="nama" class="my-2">Nama Fakultas</label>
              <input class="form-control @error('kode_fakultas') is-invalid @enderror" type="text" name="nama_fakultas" id="nama" autocomplete="off"  value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}"/>
              <label for="dekan" class="my-2">Dekan</label>
              {{-- @endforeach --}}
              <select class="form-select" aria-label="Default select example" id="dekan" name="dekan">
                <option value= "">NULL</option>
                @foreach ($dosens as $dosen)
                  <option value="{{$dosen['NIP']}}">{{$dosen['first_name']}} {{$dosen['last_name']}}</option> 
                @endforeach
              </select>
              <input class="btn btn-success my-3 form-control" type="submit" value="SUBMIT" />
            </form>
          </div>
        </div>
      </div>
      <!-- FAKULTAS CONTAINER END -->
  @endsection