<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(), //Lo llenara con una sentencia
            'content' => $this->faker->text() //Lo llenara con un texto de relleno
        ];
    }
}

//Los factory son los que permiten llenar campos de la base de datos con informacion falsa