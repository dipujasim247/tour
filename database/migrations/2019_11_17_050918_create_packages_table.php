<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_name');
            $table->unsignedBigInteger('continents_id')->nullable();
            $table->unsignedBigInteger('sub_continents_id')->nullable();
            $table->unsignedBigInteger('trip_type_id')->nullable();
            $table->string('tour_duration');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('tour_price');
            $table->text('tour_details');
            $table->text('tour_price_include')->nullable();
            $table->text('tour_price_exclude')->nullable();
            $table->string('hotels');
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->foreign('continents_id')->references('id')->on('continent');
            $table->foreign('sub_continents_id')->references('id')->on('sub_continents');
            $table->foreign('trip_type_id')->references('id')->on('trip_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
