<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstiloFanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estilo_fan', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('estilo_id');
          $table->foreign('estilo_id')->references('id')->on('estilos');
          $table->unsignedInteger('fan_id');
          $table->foreign('fan_id')->references('id')->on('fans');
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
        Schema::dropIfExists('estilo_fan');
    }
}
