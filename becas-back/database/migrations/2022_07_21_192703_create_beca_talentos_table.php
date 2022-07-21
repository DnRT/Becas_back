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
        Schema::create('beca_talento', function (Blueprint $table) {
            $table->id();
            $table->integer('id_postulante')->uniqid();
            $table->string('certificado_notas');
            $table->string('certificado_alumno_regular');
            $table->string('inscripcion_federacion');
            $table->string('situacion_economica');
            $table->integer('telefono');
            $table->string('datos_cuenta_bancaria');
            $table->string('beneficio');
            $table->boolean('beca_municipalidad_2021');
            $table->string('establecimiento_estudios');
            $table->string('nombre_establecimiento');
            $table->string('nombre_carrera');
            $table->string('duracion_carrera');
            $table->string('semestre_actual');
            $table->float('promedio_notas');
            $table->string('actividad_jefe_hogar');
            $table->string('situacion_jefe_hogar');
            $table->string('tramo_registro_social');
            $table->string('tramo_ingresos');
            $table->string('materialidad_vivienda');
            $table->string('estado_vivienda');
            $table->string('tenencia_vivienda');
            $table->boolean('enfermedad_cronica');
            $table->string('certificado_salud');
            $table->boolean('enfermedad_catastrofica');
            $table->string('afectado_patologia');
            $table->boolean('gastos_permanentes_enfermedad');
            $table->boolean('situacion_discapacidad');
            $table->string('certificado_discapacidad');
            $table->boolean('padres_adolecentes');
            $table->boolean('padre_postulante');
            $table->string('certificado_nacimiento');
            $table->string('lugar_estudios');
            $table->boolean('vivienda_zona_rural');
            $table->string('zona_participacion_talento');
            $table->string('frecuencia_practica_talento');
            $table->boolean('participacion_institucion_talento');
            $table->boolean('premiacion_talento');
            $table->string('estado_postulacion');
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
        Schema::dropIfExists('beca_talento');
    }
};
