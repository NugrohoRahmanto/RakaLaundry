@extends('layouts.app-master')

@section('content')
    <div class=" p-5 rounded">
        @auth
        <div class="container">
          <form action="/search_history" class="d-flex" role="search" style="padding-left: 50rem" method="GET">
            <input class="form-control me-2" name="search" type="search" placeholder="Nama Member" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        <div class="container" style="margin-top: 3rem" >
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>nama</th>
                  <th>alamat</th>
                  <th>No Hp</th>
                  <th>Petugas</th>
                  <th>tipe</th>
                  <th>Jumlah</th>
                  <th>Waktu Transaksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($histories as $data)
                <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->no_hp }}</td>
                <td>{{ $data->username }}</td>
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
                <td>{{ $data->jumlah }}</td>
                <td>{{ $data->created_at }}</td>
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