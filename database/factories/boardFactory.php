<?php

namespace Database\Factories;

use App\Models\{Board, User};
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoardFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant
     *
     * @var string
     */
    protected $model = Board::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(), // ID de l'utilisateur
            'title' => $this->faker->sentence, // Titre de la board
            'description' => $this->faker->paragraph, // Description de la board
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
