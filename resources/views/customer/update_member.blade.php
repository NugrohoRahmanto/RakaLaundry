@extends('layouts.app-master')

@section('content')
<div class="container">
  <h2 class="text-center p-4">Update Data Member</h2>
  <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post" class="form-group" style="width:70%; margin-left:15%;">

      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    
      <div class="form-floating mb-4">
        {{-- <label>Name:</label> --}}
        <input value = '<?php echo$users[0]->name; ?>' type="text" class="form-control" placeholder="Name" name="name">
        <label for="floatingInput">Nama</label>
      </div>
      <div class="form-floating mb-4">
        {{-- <label>Alamat:</label> --}}
        <input value = '<?php echo$users[0]->alamat; ?>' type="text" class="form-control" placeholder="alamat" name="alamat">
        <label for="floatingInput">Alamat</label>
    
      </div>
    <div class="form-floating mb-4">
        {{-- <label>NO_hp:</label> --}}
        <input value = '<?php echo$users[0]->no_hp; ?>' type="text" class="form-control" placeholder="no_hp" name="no_hp">
        <label for="floatingInput">No Hp</label>
    
    </div>
        <button type="submit"  value = "update member" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
