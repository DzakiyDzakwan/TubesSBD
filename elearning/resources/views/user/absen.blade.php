@extends('main.usertemplate')

@section('title')
<title>Absen</title>
@endsection

@section('content')
  <div class="container my-4 bg-light py-3">
    
    @foreach($pertemuan as $prtm)
    <div class="mx-2 my-3 mb-5 fw-bold pb-2 fs-3">[{{$prtm->mata_kuliah}}] {{$prtm->nama_matkul}} - {{$prtm->kelas}}</div>
    @endforeach
    <div class="card card-body border-0">
      <div class="">Presensi Hari Ini</div>
      <form action="/user/absen/add-absen" method="POST">
        @csrf
        @foreach($mahasiswas as $mahasiswa)
        <input type="hidden" class="col form-control" id="mahasiswa" name="mahasiswa" value="{{$mahasiswa->NIM}}">
        @endforeach

        @foreach($pertemuan as $prtm)
        <input type="hidden" class="col form-control" id="pertemuan" name="pertemuan" value="{{$prtm->pertemuan_id}}">
        @endforeach

        <div class="row px-2 py-2">
          <div class="col-2 form-check">
            <input class="form-check-input" type="radio" name="status" id="status" value="hadir" >
            <label class="form-check-label" for="hadir">
              Hadir
            </label>
          </div>
          <div class="col-2 form-check ">
            <input class="form-check-input" type="radio" name="status" id="status" value="terlambat">
            <label class="form-check-label" for="terlambat">
              Terlambat
            </label>
          </div>
          <div class="col-2 form-check ">
            <input class="form-check-input" type="radio" name="status" id="status" value="absen">
            <label class="form-check-label" for="absen">
              Absen
            </label>
          </div>
        </div>  
        
        <div class="">
          <button type="submit" class="btn btn-success">Kirimkan</button>
        </div>
      </form>
      

    </div>

    <div class="mx-3 mt-5">
    <table class="table table-striped">
      <thead>
        <!-- judul tabel -->
        <tr>
            <th>Date</th>
            <th>Status</th>
        </tr>
        </thead>
        <!-- data tabel -->
        @foreach($absens as $absen)
        <tr>
          <td>{{$absen->tanggal_pertemuan}}</td>
          <td>{{$absen->status}}</td>
          <td>{{$absen->created_at}}</td>
        </tr>
        @endforeach
    </table>
    </div>
  </div>

@endsection