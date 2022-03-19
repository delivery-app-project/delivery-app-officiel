<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreatePackagesTable.
 */
class CreatePackagesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function(Blueprint $table) {
            $table->id();
			$table->string("name")->nullable();
			$table->text('description')->nullable();
			// user
            $table->unsignedBigInteger('marchent_id');
            $table->foreign('marchent_id')->references('id')->on('marchents')->onDelete('cascade');
			
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
		Schema::drop('packages');
	}
}
