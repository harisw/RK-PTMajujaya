<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataBarangTable extends Migration {

	public function up()
	{
		Schema::create('DataBarang', function(Blueprint $table) {
			$table->increments('id_barang');
			$table->timestamps();
			$table->string('nama_barang', 255);
			$table->integer('harga');
			$table->integer('stock');
		});
	}

	public function down()
	{
		Schema::drop('DataBarang');
	}
}
