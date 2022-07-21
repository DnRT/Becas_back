<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\beca_educacion_superior>
 */
class BecaEducacionSuperiorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_postulante'=>$this->faker->id_postulante,
            'certificado_notas'=>$this->faker->certificado_notas,
            'certificado_alumno_regular'=>$this->faker->certificado_alumno_regular,
            'situacion_economica'=>$this->faker->situacion_economica,
            'telefono'=>$this->faker->telefono,
            'cuenta_bancaria'=>$this->faker->cuenta_bancaria,
            'beneficio'=>$this->faker->beneficio,
            'beca_municipalidad_2021'=>$this->faker->beca_municipalidad_2021,
            'establecimiento_estudios'=>$this->faker->establecimiento_estudios,
            'nombre_establecimiento'=>$this->faker->nombre_establecimiento,
            'nombre_carrera'=>$this->faker->nombre_carrera,
            'duracion_carrera'=>$this->faker->duracion_carrera,
            'semestre_actual'=>$this->faker->semestre_actual,
            'promedio_notas'=>$this->faker->promedio_notas,
            'actividad_jefe_hogar'=>$this->faker->actividad_jefe_hogar,
            'situacion_jefe_hogar'=>$this->faker->situacion_jefe_hogar,
            'tramo_registro_social'=>$this->faker->tramo_registro_social,
            'tramo_ingresos'=>$this->faker->tramo_ingresos,
            'materialidad_vivienda'=>$this->faker->materialidad_vivienda,
            'estado_vivienda'=>$this->faker->estado_vivienda,
            'tenencia_vivienda'=>$this->faker->tenencia_vivienda,
            'enfermerda_cronica'=>$this->faker->enfermerda_cronica,
            'certificado_salud'=>$this->faker->certificado_salud,
            'enfermedad_catastrofica'=>$this->faker->enfermedad_catastrofica,
            'afectado_patologia'=>$this->faker->afectado_patologia,
            'gastos_permanentes_enfermedad'=>$this->faker->gastos_permanentes_enfermedad,
            'situacion_discapacidad'=>$this->faker->situacion_discapacidad,
            'certificado_discapacidad'=>$this->faker->certificado_discapacidad,
            'padres_adolecentes'=>$this->faker->padres_adolecentes,
            'padre_postulante'=>$this->faker->padre_postulante,
            'certificado_nacimiento'=>$this->faker->certificado_nacimiento,
            'lugar_estudios'=>$this->faker->lugar_estudios,
            'vivienda_zona_rural'=>$this->faker->vivienda_zona_rural,
            'estado_postulacion'=>$this->faker->estado_postulacion
        ];
    }
}
