@extends('layouts.app-master')

@section('content')
    <div class=" p-5 rounded">
        @auth
        <div class="container">
          <form action="/search" class="d-flex" role="search" style="padding-left: 50rem" method="GET">
            <input class="form-control me-2" name="search" type="search" placeholder="Nama Member" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        <div class="container" style="margin-top: 3rem" >
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Tipe</th>
                  <th>Nama</th>
                  <th>No Hp</th>
                  <th>Jumlah</th>
                  <th>User</th>
                  <th>Waktu</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($cuci as $data)
                <tr>
                <td>
                  @if ($data->type == 1)
                      Cuci Reguler
                  @elseif ($data->type == 2)
                      Cuci Satuan
                  @elseif ($data->type == 3)
                      Setrika
                  @elseif ($data->type == 4)
                      Cuci Komplit
                  @else
                      Unknown Type
                  @endif
                </td>
                <td>{{ $data->customer->name }}</td>
                <td>{{ $data->customer->no_hp }}</td>
                <td>{{ $data->jumlah }}</td>
                <td>{{ $data->user->username }}</td>
                <td>{{ $data->created_at }}</td>
                <td>
                  <a class="btn btn-primary" href = 'cetak/{{ $data->id }}' target="_blank">Nota</a>
                  <a  class="btn btn-danger" href = 'selesai/{{ $data->id }}'>Selesai</a>
                  
                </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          
        @endauth

        @guest
        <h1>HELLO STAFF</h1>
        <p class="lead">Silahkan login terlebih dahulu untuk akses menu.</p>
        @endguest
    </div>
@endsection