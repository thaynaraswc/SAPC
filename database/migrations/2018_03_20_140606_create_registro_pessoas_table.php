<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('escolaridade');
            $table->string('nacionalidade');
            /*$table->string('nomeResponsavelEmp');
            $table->string('CPFResponsavelEmp');
            $table->string('identidadeResponsavelEmp');
            $table->string('dataEmissao');
            $table->string('nomeMaeResponsavelEmp');
            $table->string('nomePaiResponsavelEmp');
            $table->string('dataNascimento');
            $table->string('sexoPessoa');
            $table->integer('paisNascimento');
            $table->integer('estadoNascimento');
            $table->integer('cidadeNascimento');
            $table->string('profissao');
            $table->string('localTrabalho');
            $table->integer('estadoCivil');*/
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
        Schema::dropIfExists('registro_pessoas');
    }
}
