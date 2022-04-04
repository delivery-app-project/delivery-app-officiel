<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateTypeMorphsTable.
 */
class CreateTypeMorphsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('type_morphs', function(Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('description')->nullable();
			$table->string('type')->nullable();
			
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
		Schema::drop('type_morphs');
	}
}
