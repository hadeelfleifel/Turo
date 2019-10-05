<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('city_id');
            $table->string('user_name');
            $table->string('city_name');
            $table->smallInteger('car_number');
            $table->string('car_model');
            $table->string('car_type');
            $table->smallInteger('car_price');
            $table->smallInteger('car_doors');
            $table->string('car_seats');
            $table->smallInteger('car_cc');
            $table->date('from');
            $table->date('to');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('city_id')->references('id')->on('cities');
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
        Schema::dropIfExists('cars');
    }
}
