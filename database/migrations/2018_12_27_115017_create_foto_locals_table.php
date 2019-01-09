<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos_locais', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('local_id');
          $table->foreign('local_id')->references('id')->on('locais')->onDelete('cascade');
          $table->string('imagem');
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
        Schema::dropIfExists('fotos_locais');
    }
}
