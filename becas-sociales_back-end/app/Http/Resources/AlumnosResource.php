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
            'id' => (string)$this->id,
            'tipo' => 'Alumno',
            'atributos' => [
                'rut' => $this->rut,
                'nombre' => $this->nombre,
                'apellido' => $this->apellido,
                'edad' => (string)$this->edad,
                'direccion' => $this->direccion
            ]
        ];
    }
}
