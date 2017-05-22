<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateListBarangTable extends Migration {

	public function up()
	{
		Schema::create('ListBarang', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('barang_id')->unsigned();
			$table->integer('quotation_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('ListBarang');
	}
}