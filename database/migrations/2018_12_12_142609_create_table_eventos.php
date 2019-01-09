<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('fan_id');
          $table->foreign('fan_id')->references('id')->on('fans')->onDelete('no action');
          $table->unsignedInteger('artista_id');
          $table->foreign('artista_id')->references('id')->on('artistas')->onDelete('no action');
          $table->unsignedInteger('cidade_id');
          $table->string('nome');
          $table->string('imagem');
          $table->text('resumo');
          $table->text('descricao')->nullable();
          $table->text('slug');
          $table->unsignedInteger('participantes')->default(0);
          $table->date('data_evento')->nullable();
          $table->date('data_arrecadacao')->nullable();
          $table->unsignedInteger('capacidade')->nullable();
          $table->string('local')->nullable();
          $table->float('valor')->nullable();
          $table->float('valor_arrecadado')->nullable();
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
      Schema::dropIfExists('eventos');
    }
}
