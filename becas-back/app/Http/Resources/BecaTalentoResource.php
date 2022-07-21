<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BecaTalentoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'beca' => 'Talento',
            'data' => [
                'id_postulante'=>$this->id_postulante,
                'certificado_notas'=>$this->certificado_notas,
                'certificado_alumno_regular'=>$this->certificado_alumno_regular,
                'inscripcion_federacion'=>$this->inscripcion_federacion,
                'situacion_economica'=>$this->situacion_economica,
                'telefono'=>$this->telefono,
                'cuenta_bancaria'=>$this->cuenta_bancaria,
                'beneficio'=>$this->beneficio,
                'beca_municipalidad_2021'=>$this->beca_municipalidad_2021,
                'establecimiento_estudios'=>$this->establecimiento_estudios,
                'nombre_establecimiento'=>$this->nombre_establecimiento,
                'nombre_carrera'=>$this->nombre_carrera,
                'duracion_carrera'=>$this->duracion_carrera,
                'semestre_actual'=>$this->semestre_actual,
                'promedio_notas'=>$this->promedio_notas,
                'actividad_jefe_hogar'=>$this->actividad_jefe_hogar,
                'situacion_jefe_hogar'=>$this->situacion_jefe_hogar,
                'tramo_registro_social'=>$this->tramo_registro_social,
                'tramo_ingresos'=>$this->faker->tramo_ingresos,
                'materialidad_vivienda'=>$this->materialidad_vivienda,
                'estado_vivienda'=>$this->estado_vivienda,
                'tenencia_vivienda'=>$this->tenencia_vivienda,
                'enfermerda_cronica'=>$this->enfermerda_cronica,
                'certificado_salud'=>$this->certificado_salud,
                'enfermedad_catastrofica'=>$this->enfermedad_catastrofica,
                'afectado_patologia'=>$this->afectado_patologia,
                'gastos_permanentes_enfermedad'=>$this->gastos_permanentes_enfermedad,
                'situacion_discapacidad'=>$this->situacion_discapacidad,
                'certificado_discapacidad'=>$this->certificado_discapacidad,
                'padres_adolecentes'=>$this->padres_adolecentes,
                'padre_postulante'=>$this->padre_postulante,
                'certificado_nacimiento'=>$this->certificado_nacimiento,
                'lugar_estudios'=>$this->lugar_estudios,
                'vivienda_zona_rural'=>$this->vivienda_zona_rural,
                'zona_participacion_talento'=>$this->zona_participacion_talento,
                'frecuencia_practica_talento'=>$this->frecuencia_practica_talento,
                'participacion_institucion_talento'=>$this->participacion_institucion_talento,
                'premiacion_talento'=>$this->premiacion_talento
            ]
        ];
    }
}
