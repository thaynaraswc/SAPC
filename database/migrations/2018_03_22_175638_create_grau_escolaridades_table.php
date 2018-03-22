<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrauEscolaridadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grau_escolaridades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            
        

            $table->timestamps();
        });

        Schema::table('grau_escolaridade', function(Blueprint $table) {
            $table->foreign('escolaridade')->references('id')->on('registro_pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grau_escolaridades');
    }
}
