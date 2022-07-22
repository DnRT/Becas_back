<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rut' => $this->faker->rut,
            'nombre' => $this->faker->nombre,
            'apellido' => $this->faker->apellido,
            'edad' => $this->faker->edad,
            'direccion' => $this->faker->direccion,
            'id_beca' => $this->faker->id_beca,
            'ubicacion_archivos' => $this->faker->ubicacion_archivos
            
        ];
    }
}
