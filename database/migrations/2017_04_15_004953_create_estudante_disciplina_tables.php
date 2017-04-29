<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudanteDisciplinaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudante_disciplina', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('disciplina_id')->unsigned();
            $table->integer('estudante_id')->unsigned();
            $table->timestamps();

            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
            $table->foreign('estudante_id')->references('id')->on('estudantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudante_disciplina');
    }
}
