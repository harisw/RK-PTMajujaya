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
								<li><a href="items">Items</a></li>
								<li><a href="#">Tentang Kami</a></li>
								<li><a href="#">Kontak Kami</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="{{ url('/login') }}">Masuk</a></li>
							</ul>
						</div>
					</div>
				</nav>

        <div class="panel panel-default">
          <div class="panel-body">
            <h4><i class="fa fa-university"></i> DAFTAR DOSEN</h4><hr>
            <div class=row><div class="col-md-6">
              <a href="/dosen/create" class="btn btn-primary">
              <i class="fa fa-plus-circle"></i> Tambah</a>
            </div><div class="col-md-2"></div><div class="col-md-4">            </div></div><br>
        @if($dsn->count())
        <div class="table-responsive">
        <table class="table table-bordered table-striped
                      table-hover table-condensed tfix">
        <thead align="center">
        <tr><td><b>NIP</b></td><td><b>Nama DOSEN</b></td>
            <td colspan="2"><b>MENU</b></td></tr>
        </thead>
        @foreach($dsn as $m)
        <tr><td>{{ $m->nip }}</td><td>{{ $m->namadosen }}</td>
        <td align="center" width="30px">
        <a href="/dosen/{{$k->nip}}/edit" class="btn btn-warning btn-sm"
        role="button"><i class="fa fa-pencil-square"></i> Edit</a>                           </td>
        <td align="center" width="30px">
        {!! Form::open(array('route' => array('dosen.destroy', $m->nip),
                             'method' => 'delete',
                             'style' => 'display:inline')) !!}
        <button class='btn btn-sm btn-danger delete-btn' type='submit'>
        <i class='fa fa-times-circle'></i> Delete </button>
        {!! Form::close() !!}
        </td>
         </tr>
        @endforeach
        </table>
        </div>
        @else
         <div class="alert alert-warning">
         <i class="fa fa-exclamation-triangle"></i> Data Dosen tidak Ada
          </div>
        @endif
</div></div>



        <div class="alert alert-panel" style="back">
					<h3>Perlengkapan Berbagai Alat Kesehatan</h3>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
