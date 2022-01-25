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
        $faker = \Faker\Factory::create();
        return [
            'tva' => $faker->numerify('########'),
            'nom' => $faker->company,
            'activite' => $faker->bs,
            'adresse' => $faker->address,
            'ville' => $faker->city,
            'numero' => $faker->numerify('##########'),
            'code_postal' => $faker->numerify('#####'),
        ];
    }
}
