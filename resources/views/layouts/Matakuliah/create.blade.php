<!DOCTYPE html>
<html>
<head>
    <title>Create Data Matakuliah</title>
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
      CREATE DATA MATAKULIAH
    </div>
    <a href="{{url('matakuliah')}}" class="btn btn-success"> Tampilkan Data </a>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-matakuliah')}}">
       @csrf
        <div class="form-group">
          <label>No</label>
          <input type="text" id="id" name="id" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Kode</label>
          <input type="text" id="kode" name="kode" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" id="nama" name="nama" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>SKS</label>
          <input type="text" id="sks" name="sks" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Semester</label>
          <input type="text" id="semester" name="semester" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>