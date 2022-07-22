<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlumnosResource extends JsonResource
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
            'id' => $this->id,
            'tipo' => 'Alumno',
            'data' => [
                'rut' => $this->rut,
                'nombre' => $this->nombre,
                'apellido' => $this->apellido,
                'edad' => $this->edad,
                'direccion' => $this->direccion,
                'correo' => $this->correo,
                'contrasena' => $this->contrasena,
                'id_beca' => $this->id_beca,
                'ubicacion_archivos' => $this->ubicacion_archivos
            ]
        ];
    }
}
