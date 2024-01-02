@extends('layouts.app-master')

@section('content')
<div class="container-md">
  <h1 class="text-center p-4">Data Member</h1>
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- BACK button -->
            <a class="btn btn-primary mb-4" href="/member" role="button">BACK</a>
        </div>
        <div class="col-md-6">
            <!-- Search form -->
            <form action="/search_member" class="d-flex" role="search" method="GET">
                <input class="form-control me-2" name="search" type="search" placeholder="Nama Member" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
  </div>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>NO_HP</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($customer as $data)
      <tr>
      <td>{{ $data->id }}</td>
      <td>{{ $data->name }}</td>
      <td>{{ $data->alamat }}</td>
      <td>{{ $data->no_hp }}</td>
      <td>
        <a class="btn btn-danger" href = 'delete/{{ $data->id }}'>Delete</a>
        <a class="btn btn-warning"href = 'edit/{{ $data->id }}'>Edit</a>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection