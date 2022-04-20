@extends('main.usertemplate')

@section('title')
<title>Absen</title>
@endsection

@section('content')
  <div class="container my-4 bg-light py-3">
    <div class="mx-2 my-3 mb-5 fw-bold pb-2 fs-3">[TIF1207] Struktur Data Dan Algoritma - Kelas C</div>
    <div class="mx-3 mt-5">
    <table class="table table-striped">
      <thead>
        <!-- judul tabel -->
        <tr>
            <th>Date</th>
            <th>Description</th>
            <th>Status</th>
            <th>Points</th>
            <th width="20%">Remarks</th>
        </tr>
        </thead>
        <!-- data tabel -->
        <tr>
          <td>
            Mon 4 Apr 2022<br>
            8:30AM - 10AM
          </td>
          <td>Regular class session</td>
          <td>Present</td>
          <td>2 / 2	</td>
          <td>Self-recorded</td>
        </tr>
        <tr>
          <td>
            Mon 13 Apr 2022<br>
            8:30AM - 10AM
          </td>
          <td>Regular class session</td>
          <td>Present</td>
          <td>2 / 2	</td>
          <td>Self-recorded</td>
        </tr>
        <tr>
          <td>
            Mon 20 Apr 2022<br>
            8:30AM - 10AM
          </td>
          <td>Regular class session</td>
          <td>Present</td>
          <td>2 / 2	</td>
          <td>Self-recorded</td>
        </tr>
        <tr>
          <td>
            Mon 27 Apr 2022<br>
            8:30AM - 10AM
          </td>
          <td>Regular class session</td>
          <td>Present</td>
          <td>2 / 2	</td>
          <td>Self-recorded</td>
        </tr>
    </table>
    </div>
  </div>

@endsection