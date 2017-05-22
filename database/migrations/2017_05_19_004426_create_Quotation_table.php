<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuotationTable extends Migration {

	public function up()
	{
		Schema::create('Quotation', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nama_quotation', 255);
			$table->string('nama_perusahaan', 255);
		});
	}

	public function down()
	{
		Schema::drop('Quotation');
	}
}