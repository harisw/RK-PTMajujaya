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
            <h4><i class="fa fa-university"></i> Buat Proof of Item Receipt</h4><hr>
            <div class=row><div class="col-md-6">
<!--
              <a href="/quotation/create" class="btn btn-primary">
              <i class="fa fa-plus-circle"></i> Tambah</a>
-->
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
          	<a href="#Modal{{ $m->id_quotation }}" data-toggle="modal" class="btn btn-primary">Buat Proof of Item Receipt</a>
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
		<div class="modal fade" id="Modal{{$m->id_quotation}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Proof Of Item Receipt</h4>
      </div>
      <div class="modal-body">
		  <div class="alert alert-success">
  				Payment Receipt sukses dibuat
				</div>
        <div class="row" id="pr{{$m->id_quotation}}">
        <div class="well" style="background-color: #fff; border-radius: 0; border: none; -webkit-box-shadow:none;">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>PT Maju Jaya</strong>
                        <br>
                        Jalan Surabaya Selatan No 90
                        <br>
                        <abbr title="Phone"></abbr> (+62)85709802870
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        Tanggal: 
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="text-center">
                    <h2>Laporan Penerimaan Barang</h2>
                    <h6><strong>Telah diterima barang-barang seperti tersebut dibawah ini :</strong></h6>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th class="text-center">Kuantitas</th>
                            <th class="text-center">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
											@foreach($detail as $v)
                        <tr>
                            <td class="col-md-9"><em>{{$v->nama_barang}}</em></td>
                            <td class="col-md-1" style="text-align: center"> {{$v->jumlah_barang}} </td>
                            <td class="col-md-2 text-center">Sudah Jadi</td>
                        </tr>
											@endforeach
                         <tr>
                            <td class="col-md-4"> </td>
                            <td  class="col-md-5"><h6><strong>Yang Menerima :</strong></h6></td>
                            <td  class="col-md-3"><h6></h6></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" onclick="printDiv('pr{{$m->id_quotation}}')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak</button>
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
