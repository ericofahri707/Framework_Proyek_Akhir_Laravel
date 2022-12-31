@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Mahasiswa</h1>
</div>
<section>
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-2">
        <a href="{{url('mahasiswa/create')}}" class="btn btn-primary">+ Tambah Data</a>
      </div>
    </div>
  </div>
</section>
  
<div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $dataMahasiswa)
          <tr>
            <td>{{$dataMahasiswa->nim}}</td>
            <td>{{$dataMahasiswa->nama}}</td>
            <td>{{$dataMahasiswa->alamat}}</td>
            <td>{{$dataMahasiswa->kelas}}</td>
            <td>{{$dataMahasiswa->jurusan}}</td>
            <td>
              <a href="/read/{{ $dataMahasiswa->nim }}" class="btn btn-warning">Edit</a>
              <a href="/delete/{{ $dataMahasiswa->nim }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection