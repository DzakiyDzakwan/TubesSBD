@extends('main.usertemplate')

@section('title')
<title>Edit Pertemuan</title>
@endsection

@section('content')

    <div class="container my-2 py-5 ">

        @if ($message = Session::get('success'))
	  <div class="alert alert-success alert-block">	
		  <strong>{{ $message }}</strong>
	  </div>
	@endif

        <!-- container edit -->
        <div class="container mb-5 bg-light py-3">
          <h2 class="text-success">Create Materi</h2>

                <div class="card card-body border-0">
                   
                    <form action="/user/matakuliah/createMateri" method="POST" class=" p-4">
                        @csrf
                        <!-- Nama Pertemuan-->
                        <div class="row mb-1">
                            <div class=" col-3 mb-3">
                                <label for="nama_materi" class="form-label">Nama Materi</label>
                            </div>
                            <div class="col">
                                <input type="text" class="col form-control" id="nama_materi" name="nama_materi" value="">
                            </div>
                        </div>
    
                        <!-- Deskripsi -->
                        <div class="row mb-3">
                            <div class=" col-3 mb-5">
                                <label for="deskripsi" class="form-label">Link Materi</label>
                            </div>
                            <div class="col">
                                <textarea type="text"  rows="5" class="col form-control" id="deskripsi" name="deskripsi"></textarea>
                            </div>
                        </div>

                        @foreach($materi as $prtm)
                            <input type="hidden" class="col form-control mb-2" id="pertemuan" name="pertemuan" value="{{$prtm->pertemuan_id}}">
                        @endforeach
                        {{-- Tanggal Pertemuan--}}
                        {{-- <div class="row">
                            <div class=" col-3 mb-3">
                                <label for="tanggal_pertemuan" class="form-label">Tanggal Pertemuan</label>
                            </div>
                            <div class="col">
                                <input type="date" class="col form-control" id="tanggal_pertemuan" name="tanggal_pertemuan" value="">
                            </div>
                        </div> --}}
    
                        <!-- button -->
                         <!-- button -->
                         <div class="text-end px-3 pb-2 mx-4">
                            <button type="submit" class="btn btn-success ">Buat</button>
                            @foreach($materi as $mtr)
                            <a href="/user/matakuliah/{{$mtr->kelas_id}}"><button type="button" class="btn btn-secondary ">Kembali</button></a>
                            @endforeach
                        </div>
                        
                    </form>
                    
                </div>       

        </div>
        <!-- end container edit -->

    </div>
@endsection