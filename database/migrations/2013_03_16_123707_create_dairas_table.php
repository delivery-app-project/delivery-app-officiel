<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateDairasTable.
 */
class CreateDairasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dairas', function(Blueprint $table) {
            $table->id();
			$table->string("name");
			
			// wilaya
			$table->unsignedBigInteger('wilaya_id');
			$table->foreign('wilaya_id')->references('id')->on('wilayas')->onDelete('cascade');
				
			$table->boolean('active')->nullable();
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
		Schema::drop('dairas');
	}
}
