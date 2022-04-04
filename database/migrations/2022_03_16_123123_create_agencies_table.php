<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateAgenciesTable.
 */
class CreateAgenciesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agencies', function(Blueprint $table) {
            $table->id();
			// type is morph
			// $table->enum('type',['central','secondary']);
			$table->string('name');
			$table->unsignedBigInteger('address_id')->nullable();
			// to fullfill معلومات السجل التجاري 

			// the main employee (director)
			$table->unsignedBigInteger('employee_id')->nullable();
			$table->unsignedBigInteger('stock_id')->nullable();
			
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agencies');
	}
}
