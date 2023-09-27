<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTarefa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefa', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->string('descricao')->nullable();
            $table->dateTime('dataCriacao');
            $table->dateTime('dataConclusao')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('id_lista');
            $table->foreign('id_lista')->references('id')->on('lista');
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
        Schema::dropIfExists('tarefa');
    }
}
