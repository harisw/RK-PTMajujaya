<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('ListBarang', function(Blueprint $table) {
			$table->foreign('barang_id')->references('id')->on('DataBarang')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('ListBarang', function(Blueprint $table) {
			$table->foreign('quotation_id')->references('id')->on('Quotation')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('ListBarang', function(Blueprint $table) {
			$table->dropForeign('ListBarang_barang_id_foreign');
		});
		Schema::table('ListBarang', function(Blueprint $table) {
			$table->dropForeign('ListBarang_quotation_id_foreign');
		});
	}
}