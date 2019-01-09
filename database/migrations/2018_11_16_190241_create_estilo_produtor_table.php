<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstiloProdutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estilo_produtor', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('estilo_id');
          $table->foreign('estilo_id')->references('id')->on('estilos');
          $table->unsignedInteger('produtor_id');
          $table->foreign('produtor_id')->references('id')->on('produtors');
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
        Schema::dropIfExists('estilo_produtor');
    }
}
