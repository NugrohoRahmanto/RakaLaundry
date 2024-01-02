@extends('layouts.app-master')

@section('content')
    <div class=" p-5 rounded">
        @auth
        <form action="/createtipe2" method="post" class="form-group" style="width:70%; margin-left:15%;">
            @csrf
            <div class="form-floating form-floating-lg mb-4">
                <select class="form-select form-select-lg mb-4 select2"  name="id" id="id" type="text">
                    <option value="">Pilih Member</option>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}} - {{$user->no_hp}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group input-group-sm mb-3" style="padding-right: 30rem">
                <span class="input-group-text" id="inputGroup-sizing-sm">Jumlah (pcs)</span>
                <input type="text" class="form-control" name="jumlah">
            </div>
            <button type="submit" value="Add transaction" class="btn btn-primary">Submit</button>
        </form>
        @endauth

        @guest
        <h1>HELLO STAFF</h1>
        <p class="lead">Silahkan login terlebih dahulu untuk akses menu.</p>
        @endguest
    </div>
@endsection