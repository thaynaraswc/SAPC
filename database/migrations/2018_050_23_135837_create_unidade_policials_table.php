<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadePolicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidade_policials', function (Blueprint $table) {
            $table->increments('id_unidade_policial');
            $table->string('nome');
            $table->string('nome_abreviacao');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->integer('id_municipio');
            $table->string('cep');
            $table->string('telefone_1');
            $table->string('telefone_2');
            $table->string('telefone_3');
            $table->string('fax');
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
        Schema::dropIfExists('unidade_policials');
    }
}
