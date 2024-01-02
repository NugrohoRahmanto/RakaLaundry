@extends('layouts.app-master')

@section('content')
    <div class=" p-5 rounded">
        @auth
        
        @endauth

        @guest
        <h1>HELLO STAFF</h1>
        <p class="lead">Silahkan login terlebih dahulu untuk akses menu.</p>
        @endguest
    </div>
@endsection