<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestDrives extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testDrives', function (Blueprint $table) {
            $table->increments('idTestDrives');
            $table->integer('concessionaria_id')->nullable();
            //$table->integer('concessionaria_id')->unsigned();
            // $table->foreign('concessionaria_id')->references('idConcessionaria')->on('concessionarias')->default("1");
            $table->string('data');
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
        Schema::dropIfExists('testDrives');
    }
}
