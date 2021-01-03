<?php

namespace Database\Factories;

use App\Models\{Comment, Task, User};
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(), // ID de l'utilisateur
            'task_id' => Task::factory(), // ID de la tâche
            'text' => $this->faker->text, // Contenu du commentaire
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
