<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'tva' => $this->faker->numerify('########'),
            'nom' => $this->faker->company,
            'activite' => $this->faker->bs,
            'adresse' => $this->faker->address,
            'ville' => $this->faker->city,
            'pays' => $this->faker->country,
            'numero' => $this->faker->numerify('##########'),
            'code_postal' => $this->faker->numerify('#####'),
        ];
    }
}
