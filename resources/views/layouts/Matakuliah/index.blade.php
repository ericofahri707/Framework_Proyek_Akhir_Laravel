@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Matakuliah</h1>
</div>
<section>
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-2">
        <a href="{{url('matakuliah/create')}}" class="btn btn-primary">+ Tambah Data</a>
      </div>
    </div>
  </div>
</section>
  
<div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama</th>
            <th scope="col">SKS</th>
            <th scope="col">Semester</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $dataMatakuliah)
          <tr>
            <td>{{$dataMatakuliah->id}}</td>
            <td>{{$dataMatakuliah->kode}}</td>
            <td>{{$dataMatakuliah->nama}}</td>
            <td>{{$dataMatakuliah->sks}}</td>
            <td>{{$dataMatakuliah->semester}}</td>
            <td>
              <a href="matakuliah/read/{{ $dataMatakuliah->id }}" class="btn btn-warning">Edit</a>
              <a href="matakuliah/delete/{{ $dataMatakuliah->id }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection