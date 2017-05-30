<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PT. Maju Jaya | Selling Medical Equipment</title>

	<link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{url('/')}}/css/style.css" rel="stylesheet">
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
								<img alt="Brand" src="{{url('/')}}/img/maju-jaya.jpg" style="height: 60px; margin-top: -10px;">
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
								<li><a href="{{url('/')}}">Home</a></li>
								<li><a href="{{url('/')}}/items">Items</a></li>
								<li><a href="{{url('/')}}/delivery_order">Delivery Order</a></li>
								<li><a href="{{url('/')}}/quotation">Quotation</a></li>
                <li><a href="payment_receipt">Payment Receipt</a></li>
							</ul>
						</div>
					</div>
				</nav>

        <div class="row">
          <div class="col-md-10">
            @foreach($item as $item)
            {!! Form::model($item, ['method' => 'PATCH', 'action'=> ['CManageItems@update', $item->id_barang]]) !!}
            <div class="form-group">
              {!! Form::label('nama_barang', 'Nama Barang') !!}
              {!! Form::text('nama_barang', null, array('class' => 'form-control', 'placeholder'=>'Nama Barang')) !!}
            </div>
            <div class="form-group">
              {!! Form::label('harga', 'Harga Barang') !!}
              {!! Form::number('harga', null, array('class' => 'form-control', 'placeholder'=>'Harga Barang')) !!}
            </div>
            <div class="form-group">
              {!! Form::label('stock', 'Stok Barang') !!}
              {!! Form::number('stock', null, array('class' => 'form-control', 'placeholder' => 'Stok Barang')) !!}
            </div>
            {!! Form::button('<i class="fa fa-plus-square"></i>'.
                ' Update', array('type' => 'submit', 'class'
                 => 'btn btn-primary'))!!}
          </div>
          {!! Form::close() !!}
          @endforeach
        </div>
        <div class="alert alert-panel" style="back">
          <h3>Perlengkapan Berbagai Alat Kesehatan</h3>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="{{url('/')}}/js/bootstrap.min.js"></script>
</body>
</html>
