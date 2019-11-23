<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubContinentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_continents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sub_continent_name');
            $table->unsignedBigInteger('continent_name')->nullable();
            $table->text('description');
            $table->string('photo');
            $table->timestamps();
            $table->foreign('continent_name')->references('id')->on('continent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_continents');
    }
}
