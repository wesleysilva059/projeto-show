<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngressosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingressos', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('evento_id');
          $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
          $table->string('nome');
          $table->unsignedInteger('quantidade');
          $table->float('valor');
          $table->unsignedInteger('vendidos')->nullable();
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
      Schema::dropIfExists('ingressos');
    }
}
