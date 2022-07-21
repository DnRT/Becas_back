<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beca_educacion_superior extends Model
{
    use HasFactory;
    protected $table = 'beca_educacion_superior';
    protected $primaryKey = 'id';
    protected $keyTipe = 'integer';
    protected $fillable = [
        'id_postulante','certificado_notas','certificado_alumno_regular','situacion_economica',
        'telefono','cuenta_bancaria','beneficio','beca_municipalidad_2021','establecimiento_estudios','nombre_establecimiento',
        'nombre_carrera','duracion_carrera','semestre_actual','promedio_notas','actividad_jefe_hogar','situacion_jefe_hogar',
        'tramo_registro_social','tramo_ingresos','materialidad_vivienda','estado_vivienda','tenencia_vivienda','enfermerda_cronica',
        'certificado_salud','enfermedad_catastrofica','afectado_patologia','gastos_permanentes_enfermedad','situacion_discapacidad',
        'certificado_discapacidad','padres_adolecentes','padre_postulante','certificado_nacimiento','lugar_estudios',
        'vivienda_zona_rural','estado_postulacion'
    ];
}
