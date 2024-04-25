<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category' => json_encode([$this->faker->randomElement(
                [
                  "house",
                  "flat", 
                  "apartment", 
                  "room", "shop", 
                  "lot", "garage"
                ]
             )
        ]),

        ];
    }

    
}
