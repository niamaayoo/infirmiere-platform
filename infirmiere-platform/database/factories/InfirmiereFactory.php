<?php

namespace Database\Factories;

use App\Models\Infirmiere;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Infirmiere>
 */
class InfirmiereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'user_id' => \App\Models\User::factory(),
        'specialite' => $this->faker->randomElement(['Soins', 'Pédiatrie', 'Urgence']),
        'ville' => $this->faker->city(),
    }
}
