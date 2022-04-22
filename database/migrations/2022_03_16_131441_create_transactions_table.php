<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateTransactionsTable.
 */
class CreateTransactionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table) {

            $table->id();
			
			$table->date('send_date')->nullable();
			$table->time('time_send_date')->nullable();
			$table->date('receive_date')->nullable();
			$table->time('time_receive_date')->nullable();

			$table->nullableMorphs('source');
			$table->nullableMorphs('destination');

			// employee
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');

			
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
		Schema::drop('transactions');
	}
}
