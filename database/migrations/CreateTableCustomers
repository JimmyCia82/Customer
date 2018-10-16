<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name',100);
            $table->string('nick_name',100);
            $table->date('birth_date');
            $table->boolean('male');
            $table->string('email_address')->nullable();
            $table->string('email_address_activation_code',6)->nullable();
            $table->boolean('email_address_activated')->nullable();
            $table->string('phone_number');
            $table->string('phone_number_activation_code',6);
            $table->boolean('phone_number_activated');
            $table->binary('image')->nullable();
            $table->string('password',200);
            $table->boolean('need_to_change_password');
            $table->dateTime('last_change_password_date_time');
            $table->integer('insert_user_id');
            $table->dateTime('insert_date_time');
            $table->string('insert_host_name',100);
            $table->string('insert_ip_address',50);
            $table->integer('last_update_user_id');
            $table->dateTime('last_update_date_time');
            $table->string('last_update_host_name',100);
            $table->string('last_update_ip_address',50);
            $table->integer('delete_user_id')->nullable();
            $table->dateTime('delete_date_time')->nullable();
            $table->string('delete_host_name',100)->nullable();
            $table->string('delete_ip_address',50)->nullable();
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
        Schema::dropIfExists('customers');
    }
}
