<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistaEstiloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artista_estilo', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('artista_id');
          $table->foreign('artista_id')->references('id')->on('artistas');
          $table->unsignedInteger('estilo_id');
          $table->foreign('estilo_id')->references('id')->on('estilos');
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
        Schema::dropIfExists('artista_estilo');
    }
}
