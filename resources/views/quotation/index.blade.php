<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PT. Maju Jaya | Selling Medical Equipment</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<style>
		.alert-panel {
			color: #aa0000;
			background-color: #f2dede;
			border-color: #ebccd1;
		}
	</style>
</head>
<body style="background-color: #DCDCDC;">
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<nav class="navbar navbar-default" style="background-color: #fff; min-height: 70px;">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="#">
								<img alt="Brand" src="img/maju-jaya.jpg" style="height: 60px; margin-top: -10px;">
							</a>
						</div>
						<div class="navbar-header navbar-right" style="margin-top: -10px;">
							<a class="navbar-brand">
								<h4>Medical Equipment</h4>
								<center><h5 style="margin-top: -7px;">+628 130 490 773</h5></center>
							</a>
						</div>
					</div>
				</nav>
				<nav class="navbar navbar-default" style="background-color: #aa0000; margin-bottom: 0;">
					<div class="container-fluid">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="#">Home</a></li>
								<li><a href="{{url('/')}}/items">Items</a></li>
								<li><a href="{{url('/')}}/delivery_order">Delivery Order</a></li>
								<li><a href="{{url('/')}}/quotation">Quotation</a></li>
                <li><a href="payment_receipt">Payment Receipt</a></li>
								<li><a href="{{url('/')}}/proof_item">Proof of Item Receipt</a></li>
							</ul>
						</div>
					</div>
				</nav>

        <div class="panel panel-default">
          <div class="panel-body">
			  @if(session('status_quotation'))
				<div class="alert alert-success">
  				{{session('status_quotation')}}
				</div>
				@endif
            <h4><i class="fa fa-university"></i> Daftar Quotation</h4><hr>
            <div class=row><div class="col-md-6">
              <a href="/quotation/create" class="btn btn-primary">
              <i class="fa fa-plus-circle"></i> Tambah</a>
            </div><div class="col-md-2"></div><div class="col-md-4">            </div></div><br>

        <div class="table-responsive">
        <table class="table table-bordered table-striped
                      table-hover table-condensed tfix">
        <thead align="center">
        <tr><td><b>ID</b></td>
            <td><b>Nama Quotation</b></td>
            <td><b>Nama Perusahaan</b></td>
            <td colspan="2"><b>MENU</b></td>
					</tr>
        </thead>
				<tbody>
        @foreach($quotation as $m)
        <tr>
          <td>{{ $m->id_quotation }}</td>
          <td>{{ $m->nama_quotation }}</td>
          <td>{{ $m->nama_perusahaan }}</td>
        	<td align="center" >
          	<a href="#Modal{{ $m->id_quotation }}" data-toggle="modal" class="btn btn-primary">Cetak</a>
        	</td>
				</tr>

        @endforeach
			</tbody>
        </table>
        </div>


			</div>
		</div>

		<!-- MODAL START -->
		@foreach($quotation as $m)
		<h3></h3>
		<div class="modal fade" id="Modal{{ $m->id_quotation }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<!-- /. panel-heading -->
			<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Dokumen Quotation</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<div id="pr{{ $m->id_quotation }}">
			<!-- <div class="panel-body"> -->
				<!-- info row -->
				<div class="row invoice-info" id="">
					<div class="col-sm-4 invoice-col">
						Dari
						<address>
							<strong>PT Maju Jaya</strong><br>
							Jalan Sasak 2 No.14 Kebon Jeruk<br>
							Jakarta Barat, 11550<br>
							Phone: (804) 123-5432<br>
							Email: majujaya@maju.com
						</address>
					</div>
					<!-- /.info pt maju jaya -->
					<div class="col-sm-4 invoice-col">
						Kepada
						<address>
							<strong>{{$m->nama_perusahaan}}</strong><br>
							Jalan Bumi 3 No.19 Kemanggisan<br>
							Surabaya, 61120<br>
							Phone: (555) 539-1037<br>
							Email: joko@westra.com
						</address>
					</div>
					<!-- /.info customer -->
					<div class="col-sm-4 invoice-col">
						<!-- <b>Delivery Order #007612</b><br> -->
								<b>Order #</b> <br>{{$m->id_quotation}}<br>
								<b>Tanggal</b> <br>{{ date("d/m/Y", $m->created_at->timestamp)}}<br>
						<!-- <b>Order ID:</b> 4F3S8J<br>
						<b>Tanggal:</b> 2/22/2014<br> -->
					</div>
					<!-- /.info  -->
				</div>
				<!-- /.row -->

				<!-- Table row -->
				<div class="row">
					<div class="col-md-12 table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
							<tr>
								<th width="80">Produk #</th>
								<th>Produk</th>
								<th width="80">Jumlah</th>
								<th width="100">Subtotal</th>
							</tr>
							</thead>
							<tbody>
							@foreach($detail as $key)
								@if($key->quotation_id == $m->id_quotation)
								<tr>
									<td class="text-center">{{ $key->id_barang }}</td>
									<td>{{ $key->nama_barang }}</td>
									<td class="text-center">{{ $key->jumlah_barang }}</td>
									<td>{{ $key->subtotal }}</td>
								</tr>
								@endif
							@endforeach
							</tbody>
						</table>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->

				<div class="row">
					<!-- accepted payments column -->
					<!-- /.col -->
					<div class="col-md-6">
								<p class="lead">Tanggal {{date("d/m/Y", $m->created_at->timestamp)}}</p>

						<!-- <p class="lead">Tanggal 22 April 2017</p> -->
						<div class="table-responsive">
							<table class="table">
								<!-- <tr>
									<th style="width:50%">Subtotal:</th>
									<td>Rp. 1.900.000,00</td>
								</tr>
								<tr>
									<th>Tax (5%)</th>
									<td>Rp. 95.000,00</td>
								</tr> -->
								<tr>
											<th>Total:</th>
											<td>Rp. {{$m->total_harga}}</td>
									<!-- <th>Total:</th>
									<td>Rp. 1.995.000,00</td> -->
								</tr>
							</table>
						</div>
					</div>
					<!-- /.col -->
				</div>
					</div>
				<!-- /.row -->
				<div class="row no-print">
					<div class="col-md-12 text-right">
					<button type="button" onClick="printDiv('pr{{ $m->id_quotation }}')" class="btn btn-default pull-left"/><i class="fa fa-print"></i> Cetak</button></a>
					</div>
				</div>
			<!-- </div> -->
			<!-- /. panel body -->
		
				</div>
			</div>
		</div>
		</div>
			<!-- MODAL	 -->
			@endforeach

        <div class="alert alert-panel" style="back">
					<h3>Perlengkapan Berbagai Alat Kesehatan</h3>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

	<script type="text/javascript">
	function printDiv(divName) {

	var printContents = document.getElementById(divName).innerHTML;
	 var originalContents = document.body.innerHTML;

	 document.body.innerHTML = printContents;

	 window.print();

	 location.reload(true);
 }
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
