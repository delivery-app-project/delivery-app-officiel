<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateOrdersTable.
 */
class CreateOrdersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
            $table->id();
			$table->string('receiver');
			$table->enum('receiver_type',['company','user']);
			$table->string('phone');
			$table->string('second_phone')->nullable();
			$table->string('code_postal')->nullable();
			$table->string('email')->nullable();
			$table->string('weight')->nullable();
			$table->string('height')->nullable();
			$table->string('width')->nullable();
			$table->string('length')->nullable();
			$table->date('send_date')->nullable();
			$table->date('receive_date')->nullable();
			$table->date('time_receive_date')->nullable();
			$table->string('etat')->nullable();
			$table->bigInteger('quatity');
			// package
            $table->unsignedBigInteger('package_id');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');

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
		Schema::drop('orders');
	}
}
