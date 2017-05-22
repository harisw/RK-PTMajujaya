<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Membuat Quotation | Selling Medical Equipment</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<style>
		.alert-panel {
			color: #aa0000;
			background-color: #f2dede;
			border-color: #ebccd1;
		}
		.alert2 {
			padding: 15px;
			border: 1px solid transparent;
			border-radius: 4px;
		}
		.footer {
			clear: left;
			/*padding-top: 13px;*/
			background: #bdbdbd;
			font-size: 15px;
			color: #242424;
			text-align: center;
			border-top: 1px #cccccc solid;
			border-bottom: 1px #cccccc solid;
			bottom: 0;
			padding: 13px;
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
								<li><a href="#">Quotation</a></li>
								<li><a href="#">Payment Receipt</a></li>
								<li><a href="#">Delivery Order</a></li>
								<li><a href="#">Proof Of Item Receipt</a></li>
							</ul>
						</div>
					</div>
				</nav>

				<div style="background-color: #fff; min-height: 75vh;">
					<div class="alert2 alert-panel">
						<h3>Mencetak Payment Receipt</h3>
					</div>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
						<table class="table" style="margin-top: 20px;">
							<thead class="thead-inverse">
								<tr>
									<td>Tabel Quotation</td>
								</tr>
								<tr>
									<th>Id</th>
									<th>Nama</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>PT Simon Action</td>
									<td><a href="#Modal1" class="btn btn-warning" data-toggle="modal">Buat</a></td>
								</tr>
								<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLongTitle">Detail Quotation</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <img src="img/quote.jpg" style="">
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cetak</button>
								        <button type="button" class="btn btn-primary">Simpan</button>
								      </div>
								    </div>
								  </div>
								</div>
								<tr>
									<td>2</td>
									<td>PT Rajin Sehat</td>
									<td><a href="#Modal2" class="btn btn-warning" data-toggle="modal">Buat</a></td>
								</tr>
								<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Detail Quotation</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<img src="img/quote2.jpg" style="">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Cetak</button>
												<button type="button" class="btn btn-primary">Simpan</button>
											</div>
										</div>
									</div>
								</div>
								<tr>
									<td>3</td>
									<td>PT TAKA</td>
									<td><a href="#Modal3" class="btn btn-warning" data-toggle="modal">Buat</a></td>
								</tr>
								<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Detail Quotation</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<img src="img/quote3.jpg" style="">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Cetak</button>
												<button type="button" class="btn btn-primary">Simpan</button>
											</div>
										</div>
									</div>
								</div>
							</tbody>
						</table>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>

				<footer class="footer">
					<div>
						© Copyright 2017 PT Maju Jaya, Inc. All rights reserved. Disclaimer.
					</div>
				</footer>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
