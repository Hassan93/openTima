<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemaCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tema_candidatos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proposta_tema_id')->unsigned();
            $table->integer('candidato_id')->unsigned();
            $table->integer('total_candidatos')->default(0);//tem na base de dados um trigger que actualiza esse atributo.
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
        Schema::dropIfExists('tema_candidatos');
    }
}
