<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateCitiesTable.
 */
class CreateCitiesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->id();
			
			$table->string("name");
			
			// daira
			$table->unsignedBigInteger('daira_id');
			$table->foreign('daira_id')->references('id')->on('dairas')->onDelete('cascade');
				
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
		Schema::drop('cities');
	}
}
