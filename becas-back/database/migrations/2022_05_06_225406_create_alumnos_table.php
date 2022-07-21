<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try{
            Schema::create('alumno', function (Blueprint $table) {
                $table->id();
                $table->string('rut')->uniqid();
                $table->string('nombre');
                $table->string('apellido');
                $table->integer('edad');
                $table->string('direccion');
                $table->string('correo');
                $table->string('contrasena');
                $table->integer('id_beca');
                $table->string('ubicacion_archivos');
                $table->timestamps();
            });
        }catch(Exception $ex){
            echo $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
