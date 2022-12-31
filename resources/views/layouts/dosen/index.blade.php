@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dosen</h1>
</div>
<section>
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-2">
        <a href="{{url('dosen/create')}}" class="btn btn-primary">+ Tambah Data</a>
      </div>
    </div>
  </div>
</section>
  
<div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">No_Telpon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $dataDosen)
          <tr>
            <td>{{$dataDosen->nip}}</td>
            <td>{{$dataDosen->nama}}</td>
            <td>{{$dataDosen->email}}</td>
            <td>{{$dataDosen->no_telpon}}</td>
            <td>{{$dataDosen->alamat}}</td>
            <td>
              <a href="dosen/read/{{ $dataDosen->nip }}" class="btn btn-warning">Edit</a>
              <a href="dosen/delete/{{ $dataDosen->nip }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection