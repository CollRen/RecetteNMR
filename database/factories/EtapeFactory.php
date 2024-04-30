<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recette;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etape>
 */
class EtapeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'description' => $this->faker->sentence,
                'recette_id' => Recette::factory(),
            ];
    }
}
