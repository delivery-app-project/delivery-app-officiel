<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateMarchentsTable.
 */
class CreateMarchentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('marchents', function(Blueprint $table) {
            $table->id();
			$table->string('company_name')->nullable();
			$table->unsignedBigInteger('address_id')->nullable();
            // رقم التعريف الضريبي
			$table->string('tax_identification_number')->nullable();
			$table->text('trade_type')->nullable();
			// user
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
		Schema::drop('marchents');
	}
}
