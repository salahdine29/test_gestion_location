<?php

namespace Database\Factories;

use App\Models\Modele;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voiture>
 */
class VoitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'matricule'=>fake()->numberBetween(5000,90000),
            'anneModele'=>fake()->date(),
            'couleur'=>fake()->colorName(),
            'puissance' => '5000',
            'coutparjour'=> '250',
            'image'=>fake()->image(),
            'dispo'=>random_int(0,1),
            'modele_id'=>Modele::all()->random()->id,
            'carburant'=>random_int(1,10),
        ];
    }
}
