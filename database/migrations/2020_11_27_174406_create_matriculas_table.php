<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('aluno_id')->Nullable();
            $table->string('curso_id')->Nullable();
            $table->integer('cod_matricula')->unique();

            $table->foreign('aluno_id')->references('email')->on('alunos');
            $table->foreign('curso_id')->references('titulo')->on('cursos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
}
