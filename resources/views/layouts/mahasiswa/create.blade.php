<!DOCTYPE html>
<html>
<head>
    <title>Create Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      CREATE DATA MAHASISWA
    </div>
    <a href="{{url('mahasiswa')}}" class="btn btn-success"> Tampilkan Data </a>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-mahasiswa')}}">
       @csrf
        <div class="form-group">
          <label>NIM</label>
          <input type="text" id="nim" name="nim" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" id="nama" name="nama" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control" required=""></textarea>
        </div>
        <div class="form-group">
          <label>Kelas</label>
          <input type="text" id="kelas" name="kelas" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>jurusan</label>
          <input type="text" id="jurusan" name="jurusan" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>