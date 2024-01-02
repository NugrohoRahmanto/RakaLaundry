@extends('layouts.app-master')

@section('content')
    <div class=" p-5 rounded">
        @auth
        <div class="container  mt-5">
            <h1 style="margin-left: 1rem">AYO CUCI!</h1>
            <div class="container " style=" float:left; margin-top: 40px"> 
                <div class="row" style="margin: 0 -5px">
                    <div class="column" style="float: left; width: 50%; padding: 0 10px ">
                        <div class="card" style="padding: 16px; text-align: center">
                            <div class="card-body">
                                <h3>CUCI KILOAN REGULER</h3>
                                <p class="card-text">Harga perkilo hanya Rp.6000/kg</p>
                                <a href="/cuci_tipe1" class="col-4 btn btn-primary">Cuci Kiloan Reguler</a>
                            </div>
                        </div>
                    </div>
                    <div class="column" style="float: left; width: 50%; padding: 0 10px">
                        <div class="card" style="padding: 16px; text-align: center">
                            <div class="card-body">
                                <h3>CUCI SATUAN</h3>
                                <p class="card-text">Harga per PCS Rp.10000/pcs</p>
                                <a href="/cuci_tipe2" class="col-4 btn btn-primary">Cuci Satuan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 0 -5px;">
                    <div class="column" style="float: left; width: 50%; padding: 0 10px; margin-top: 20px">
                        <div class="card" style="padding: 16px; text-align: center">
                            <div class="card-body">
                                <h3>SETRIKA</h3>
                                <p class="card-text">Harga perkilo Rp.5000/kg</p>
                                <a href="/cuci_tipe3" class="col-4 btn btn-primary">Setrika</a>
                            </div>
                        </div>
                    </div>
                    <div class="column" style="float: left; width: 50%; padding: 0 10px;margin-top: 20px">
                        <div class="card" style="padding: 16px; text-align: center">
                            <div class="card-body">
                                <h3>CUCI KILOAN + SETRIKA</h3>
                                <p class="card-text">Harga perkilo hanya Rp.9000/kg</p>
                                <a href="/cuci_tipe4" class="col-4 btn btn-primary">Cuci Kiloan Setrika</a>
                            </div>
                        </div>
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