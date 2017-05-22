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
				
				<div style="background-color: #fff;">
					<div class="alert2 alert-panel">
						<h3>Membuat Dokument Quotation</h3>
					</div>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
						<form class="form-horizontal" style="margin-top: 50px; min-height: 60vh;">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nama :</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputEmail3" placeholder="Nama">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Alamat :</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputEmail3" placeholder="Alamat">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Telepon :</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputEmail3" placeholder="Telepon">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Detail Barang :</label>
								<div class="col-sm-10">
									<div class="col-sm-5">
										<input type="text" class="form-control" id="inputPassword3" placeholder="id">
									</div>
									<div class="col-sm-5">
									<input type="text" class="form-control" id="inputPassword3" placeholder="Nama Barang">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-primary">Buat</button>
									<button type="submit" class="btn btn-danger">Batal</button>
								</div>
							</div>
						</form>
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