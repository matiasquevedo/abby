<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('horas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('descripcion');
            $table->string('fecha');
            $table->string('horas');
            $table->integer('user_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();
            $table->integer('tarea_id')->unsigned();

            //llaves foraneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
            $table->foreign('tarea_id')->references('id')->on('tareas')->onDelete('cascade');

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
        //
    }
}
