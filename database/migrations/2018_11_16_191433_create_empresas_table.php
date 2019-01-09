<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
          $table->increments('id');
          $table->enum('tipo_id', [0,1,2,3]);
          $table->string('nome');
          $table->string('responsavel');
          $table->string('email');
          $table->string('telefone');
          $table->string('site')->nullable();
          $table->string('facebook')->nullable();
          $table->string('instagram')->nullable();
          $table->text('mensagem')->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
