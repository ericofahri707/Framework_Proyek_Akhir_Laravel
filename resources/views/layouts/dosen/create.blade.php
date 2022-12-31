<!DOCTYPE html>
<html>
<head>
    <title>Create Data Dosen</title>
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
      CREATE DATA DOSEN
    </div>
    <a href="{{url('dosen')}}" class="btn btn-success"> Tampilkan Data </a>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-dosen')}}">
       @csrf
        <div class="form-group">
          <label>NIP</label>
          <input type="text" id="nip" name="nip" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" id="nama" name="nama" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" id="email" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>No_Telpon</label>
          <input type="text" id="no_telpon" name="no_telpon" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>