<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status', [0,1]);
            $table->string('nome');
            $table->string('responsavel')->nullable();
            $table->string('celular')->nullable();
            $table->string('fixo')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cep')->nullable();
            $table->string('uf',2)->nullable();
            $table->string('cidade')->nullable();
            $table->string('email')->nullable();
            $table->text('sobre')->nullable();
            $table->string('site')->nullable();;
            $table->string('facebook')->nullable();;
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('spotify')->nullable();
            $table->string('soundcloud')->nullable();
            $table->string('quantidade_minima_fans')->nullable();
            $table->string('responsavel_conta')->nullable();
            $table->integer('banco')->nullable();
            $table->enum('pessoa', ['F', 'J'])->nullable();
            $table->string('agencia')->nullable();
            $table->string('conta')->nullable();
            $table->string('identificador')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('artistas');
    }
}
