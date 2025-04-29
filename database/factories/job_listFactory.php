<?php

namespace Database\Factories;

use App\Models\contact2;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job_list>
 */
class job_listFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => fake()->numerify(),
            'contact2_id'=>contact2::factory(),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
