<?php

namespace Database\Factories;

use App\Models\{BoardUser, User, Board};
use Illuminate\Database\Eloquent\Factories\Factory;

class BoardUserFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant
     *
     * @var string
     */
    protected $model = BoardUser::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => User::factory(),// ID de l'utilisateur
            'board_id' => Board::factory(), // ID de la board
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
