@extends('layouts.app-master')

@section('content')
    <div class=" p-5 rounded" >
        @auth
        <h1 class="text-center p-5">TAMBAH MEMBER BARU</h1>
        <div class="row row-cols-md-2 g-10">
            <div class="col">
              <div class="card text-center border-primary">
                <div class="card-body">
                  <h5 class="card-title">TAMBAH MEMBER</h5>
                  <p class="card-text">KLIK TOMBOL UNTUK TAMBAH MEMBER</p>
                  <a class="btn btn-secondary" href="/add_member" role="button">ADD</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card text-center border-primary">
                <div class="card-body">
                  <h5 class="card-title">DATA MEMBER</h5>
                  <p class="card-text">KLIK TOMBOL UNTUK LIHAT MEMBER</p>
                  <a class="btn btn-secondary" href="/view_member" role="button">VIEW</a>
                </div>
              </div>
            </div>
        
          </div>
        
        @endauth

        @guest
        <h1>HELLO STAFF</h1>
        <p class="lead">Silahkan login terlebih dahulu untuk akses menu.</p>
        @endguest
    </div>
@endsection