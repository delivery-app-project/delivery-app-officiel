<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("first_name");
            $table->string('last_name');
            $table->string("phone")->unique();
            $table->string('second_phone')->nullable();
            $table->unsignedBigInteger('address_id')->nullable();
            $table->text('bank_account_number')->nullable();
            // رقم السجل التجاري
            $table->string('commercial_registration_no')->nullable();
            $table->string('birth_certifcate_number')->nullable();
            // رقم الضمان الاجتماعي
            $table->string('insurance_number')->nullable();
            // رقم شهادة الميلاد 
            $table->string('birth_certificate_number')->nullable();
            // السيارة ملك للشركة او للمستعمل
            $table->boolean('car_type')->nullable();
            // رقم السيارة 
            $table->string('car_registration_number')->nullable();
            // تاريخ الانظمام
            $table->date('joining_date')->nullable();
            
            $table->string('first_name_father')->nullable();
            $table->string('first_name_mother')->nullable();
            $table->string('last_name_father')->nullable();
            // مبلغ المالي للانظمام
            $table->string('joining_amount')->nullable();
            // موظف دائم او مؤقت 
            $table->boolean('permanent_employee')->nullable();

            $table->string("lang")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
