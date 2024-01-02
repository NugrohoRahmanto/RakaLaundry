@extends('layouts.app-master')

@section('content')
<div class="container">
  <div id="liveAlertPlaceholder"></div>
  
  <h1 class="text-center p-5">Tambah Member Baru</h1>
  <br>
  <form action = "/createcust" method = "post" class="form-group" style="width:70%; margin-left:15%;" >

      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

      <div class="form-floating mb-4">
        {{-- <label>Name:</label> --}}
        <input type="text" class="form-control" placeholder="Name" name="name">
        <label for="floatingInput">Nama</label>
      </div>
      <div class="form-floating mb-4">
        {{-- <label>Alamat:</label> --}}
        <input type="text" class="form-control" placeholder="alamat" name="alamat">
        <label for="floatingInput">Alamat</label>

      </div>
      <div class="form-floating mb-4">
          {{-- <label>NO_hp:</label> --}}
          <input type="text" class="form-control" placeholder="no_hp" name="no_hp">
          <label for="floatingInput">No Hp</label>

      </div>
    <button type="submit"  value = "Add customer" class="btn btn-primary" id="liveAlertBtn">Submit</button>
  </form>
</div>
@endsection