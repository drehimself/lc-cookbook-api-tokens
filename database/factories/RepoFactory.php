<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Repo>
 */
class RepoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->word().'-'.$this->faker->word(),
            'description' => ucfirst($this->faker->words(10, true)),
            'created_at' => $this->faker->dateTimeBetween(now()->subYear(), now()),
            'updated_at' => $this->faker->dateTimeBetween(now()->subYear(), now()),
        ];
    }
}
