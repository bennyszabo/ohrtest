<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('products', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->double('price');
			$table->timestamps();
		});
		
		Schema::create('product_colours', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->bigInteger('product_id');
			$table->timestamps();
		});
		
		Schema::create('product_colour_sizes', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->bigInteger('colour_id');
			$table->timestamps();
		});
		
		Schema::create('log', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('message', 4000);
			$table->timestamps();
		});

		Schema::create('customer_detail', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('phone_number');
		});

		Schema::create('call_record', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('incoming_number');
			$table->string('outgoing_number');
			$table->integer('duration');
			$table->date('dialed_on');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('call_record');
		Schema::dropIfExists('customer_detail');
		Schema::dropIfExists('product_colour_sizes');
		Schema::dropIfExists('product_colours');
		Schema::dropIfExists('products');
		Schema::dropIfExists('log');
	}

}
