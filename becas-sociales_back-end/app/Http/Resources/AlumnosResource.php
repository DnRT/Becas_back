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
                'rut' => $this->Rut,
                'nombre' => $this->Nombre,
                'apellido' => $this->Apellido,
                'edad' => $this->Edad,
                'direccion' => $this->Direccion,
                'correo' => $this->Correo,
                'contrasena' => $this->Contrasena
            ]
        ];
    }
}
