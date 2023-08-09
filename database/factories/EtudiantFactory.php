<?php

namespace Database\Factories;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Etudiant::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstname,
            'date' => $this->faker->date,
            'classe_id' => rand(1,7),
        ];
    }
}
