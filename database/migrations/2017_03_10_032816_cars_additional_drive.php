<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarsAdditionalDrive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_additional_drive', function (Blueprint $table) {
            $table->increments('id');
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
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
        Schema::dropIfExists('cars_additional_drive');
    }
}
