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
            $table->string('nomePessoa');
            $table->integer('escolaridade');
            $table->string('nacionalidade');
            $table->integer('estadoCivil');
            $table->integer('estadoNascimento');
            $table->string('nomeMaePessoa');
            $table->string('nomePaiPessoa');
            $table->integer('endereco_pessoa');
            $table->string('dataNascimento');
            $table->integer('cidadeNascimento');
            $table->integer('paisNascimento');
            $table->integer('documentos_pessoa');
            $table->string('profissao');
            $table->string('localTrabalho');
            $table->integer('sexoPessoa');
            $table->timestamps();
        });

        Schema::table('registro_pessoas', function(Blueprint $table) {
            $table->foreign('escolaridade')->references('id')->on('grau_escolaridades');
        });

        Schema::table('registro_pessoas', function(Blueprint $table) {
            $table->foreign('nacionalidade')->references('id')->on('nacionalidades');
        });

        Schema::table('registro_pessoas', function(Blueprint $table) {
            $table->foreign('estadoCivil')->references('id')->on('estado_civil');
        });

        Schema::table('registro_pessoas', function(Blueprint $table) {
            $table->foreign('estadoNascimento')->references('id')->on('estados');
        });

        Schema::table('registro_pessoas', function(Blueprint $table) {
            $table->foreign('cidadeNascimento')->references('id')->on('municipios');
        });

        Schema::table('registro_pessoas', function(Blueprint $table) {
            $table->foreign('paisNascimento')->references('id')->on('paises');
        });

        Schema::table('registro_pessoas', function(Blueprint $table) {
            $table->foreign('endereco_pessoa')->references('id')->on('endereco_pessoa');
        });

        Schema::table('registro_pessoas', function(Blueprint $table) {
            $table->foreign('documentos_pessoa')->references('id')->on('documentos_pessoa');
        });


        Schema::table('registro_pessoas', function(Blueprint $table) {
            $table->foreign('sexoPessoa')->references('id')->on('sexo_pessoa');
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
