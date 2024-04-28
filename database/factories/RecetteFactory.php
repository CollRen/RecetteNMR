<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\recette>
 */
class RecetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'temps_preparation' => $this->faker->randomElement([5, 10, 15, 20, 25, 30, 40, 45, 50]),
            'temps_cuisson' => $this->faker->randomElement([5, 10, 15, 20, 25, 30, 40, 45, 50]),
            'user_id' => User::factory(),
            'category_id' => Category::factory()
        ];
    }
}
