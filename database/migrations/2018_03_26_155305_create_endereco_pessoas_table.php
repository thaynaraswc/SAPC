<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco_pessoa', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cepEnderecoPessoa');
            $table->string('bairoEnderecoPessoa');
            $table->string('enderecoPessoa');
            $table->string('numeroEnderecoPessoa');
            $table->string('complementoEnderecoPessoa');
            $table->integer('estadoEnderecoPessoa');
            $table->integer('cidadeEnderecoPessoa');
            $table->string('referenciaEnderecoPessoa');
            $table->timestamps();
        });


        Schema::table('endereco_pessoa', function(Blueprint $table) {
            $table->foreign('estadoEnderecoPessoa')->references('id')->on('estados');
        });

        Schema::table('endereco_pessoa', function(Blueprint $table) {
            $table->foreign('cidadeEnderecoPessoa')->references('id')->on('municipios');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco_pessoa');
    }
}
