<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BecasResource extends JsonResource
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
            'data' => [
                'nombre'=> $this->nombre,
                'descripcion' => $this->decripcion,
                'can_post' => $this->can_post
            ]
        ];
    }
}
