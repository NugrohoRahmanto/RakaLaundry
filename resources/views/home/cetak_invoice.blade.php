<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@php
    $total = 0;
@endphp

<div class="container" style="margin-top: 10rem">
    
    <div class="row">
        <div class="col-xs-12">
			
            <div class="invoice-title pull-right">
				<img class="img-fluid" src="{!! url('logo.png') !!}" alt="Logo" width="150" height="150">
                
            </div>
			
            
    		<div class="invoice-title">
				<h1>Nota Pembayaran</h1>
				<h3 class="">Pesanan Nomor # {{ $invoice->id }}</h3>
				<address>
    				<strong>Detail Pelanggan :</strong><br>
    					{{ $invoice->customer->name }}<br>
    					{{ $invoice->customer->alamat }}<br>
                        {{ $invoice->customer->no_hp }}<br>
    				</address>
				
    		</div>
    		<hr>

    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Metode Pembayaran :</strong><br>
    					Cash Only<br>
    					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Tanggal Order:</strong><br>
    					{{ $invoice->created_at }}<br><br>
    					
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Detail Pesanan</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Jenis Layanan</strong></td>
        							<td class="text-center"><strong>Harga per pcs/kg</strong></td>
        							<td class="text-center"><strong>Jumlah pcs/kg </strong></td>
        							<td class="text-center"><strong>Total Pembayaran</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
                                    @if ($invoice->type == 1)
                                        <td>Cuci Reguler</td>
                                        <td class="text-center">Rp.6000</td>
                                        <td class="text-center">{{ $invoice->jumlah }}</td>
                                        @php
                                            $total = $invoice->jumlah * 6000;
                                        @endphp
                                        <td class="text-center"><strong>Rp.{{ number_format($total, 0, ',', '.') }}</strong></td>
                                    @elseif ($invoice->type == 2)
                                        <td>Cuci Satuan</td>
                                        <td class="text-center">Rp.10000</td>
                                        <td class="text-center">{{ $invoice->jumlah }}</td>
                                        @php
                                            $total = $invoice->jumlah * 10000;
                                        @endphp
                                        <td class="text-center"><strong>Rp.{{ number_format($total, 0, ',', '.') }}</strong></td>
                                    @elseif ($invoice->type == 3)
                                        <td>Setrika</td>
                                        <td class="text-center">Rp.5000</td>
                                        <td class="text-center">{{ $invoice->jumlah }}</td>
                                        @php
                                            $total = $invoice->jumlah * 5000;
                                        @endphp
                                        <td class="text-center"><strong>Rp.{{ number_format($total, 0, ',', '.') }}</strong></td>
                                    @elseif ($invoice->type == 4)
                                        <td>Cuci Komplit</td>
                                        <td class="text-center">Rp.9000</td>
                                        <td class="text-center">{{ $invoice->jumlah }}</td>
                                            @php
                                                $total = $invoice->jumlah * 9000;
                                            @endphp
                                            <td class="text-center"><strong>Rp.{{ number_format($total, 0, ',', '.') }}</strong></td>
                                        
                                    @endif
    								
    								
    								
    							</tr>
    							
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
		<strong>Dicetak Pada: </strong>{{ date('Y-m-d H:i:s') }}<br>
    </div>
</div>