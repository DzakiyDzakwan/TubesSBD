@extends('main.usertemplate')

@section('title')
<title>Tugas</title>
@endsection

@section('content')
<style>
  .button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: auto;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid gray;
}
.button1:hover {
  background-color: gray;
  color: white;
}
</style>
  <div class="mx-2 my-3 mb-5 fw-bold pt-5 fs-3">[TIF1207] Struktur Data Dan Algoritma - Kelas C</div>
  <div class="container my-4 bg-light py-3">
    <div class="mx-3 mt-2">
      <p>Silahkan kerjakan tugas berikut !</p>
      <p><b><h4>Submission status</h4></b></p>
    <table class="table table-striped">

        <!-- data tabel -->
        <tr>
          <td>
            <b>Submission status</b>
          </td>
          <td>No attempt</td>
        </tr>
        <tr>
          <td>
            <b>Grading status</b>
          </td>
          <td>Not graded</td>
        </tr>
        <tr>
          <td>
            <b>Due date</b>
          </td>
          <td>Thursday, 31 March 2022, 8:00 AM</td>
        </tr>
        <tr>
          <td>
           <b>Last modified</b>
          </td>
          <td>-</td>
        </tr>
    </table>
    <button class="button button1">Add submission</button>
    </div>
  </div>
@endsection