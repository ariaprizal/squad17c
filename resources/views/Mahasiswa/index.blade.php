@extends('layout/main')

@section('title','Mahasiswa')



@section('container')
<!-- jubotron -->
<div class="jumbotron jumbotron-fluid ">
  <div class="container ">
    
  </div>
</div>
<!-- end jumbotron -->
<div class="container">
<!-- panel  -->
    <div class="row justify-content-center">
      <div class="col-6 panel mt-3 mb-5">
        <h2>This is 17C Team</h2>
      </div>
    </div>
<!-- endpanel -->
</div>
<!-- isi -->
<!-- card informasi mahasiswa -->
<div class="container mt-4">
  <div class="row justify-content-center">
    @foreach ($mhs as $m)
   <div class="col-6 mb-5 col-md-3">
    <div class="card">
      <img src="\img\bg-17c.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
          <h5 class="card-title">{{$m->nama}}</h5>
          <p class="card-text">{{'TTL : '.$m->tempat_lahir}} {{$m->tanggal_lahir}}</p>
      </div>
      <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$m->npm}}</li>
          <li class="list-group-item">{{$m->jenjang}} {{$m->prodi}}</li>
          <li class="list-group-item">{{$m->alamat}}</li>
      </ul>
      <div class="card-body">
          <a href="#" class="card-link">Edit</a>
          <a href="#" class="card-link">Hapus</a>
      </div>
    </div>
   </div>
    @endforeach
  </div>
</div>
<!-- end card -->
@endsection