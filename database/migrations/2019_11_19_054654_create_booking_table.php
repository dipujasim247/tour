<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // package id, customer_name, email, phone, number of adults, childs, message
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->string('customer_name');
            $table->string('email')->nullable();
            $table->integer('phone');
            $table->integer('number_of_adults')->nullable();
            $table->integer('number_of_child')->nullable();
            $table->text('message')->nullable();
            $table->smallInteger('car_type')->nullable();
            $table->timestamps();
            $table->foreign('package_id')->references('id')->on('packages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
