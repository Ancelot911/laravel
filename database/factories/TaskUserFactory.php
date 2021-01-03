<?php

namespace Database\Factories;

use App\Models\{Task, User, TaskUser};
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskUserFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant
     *
     * @var string
     */
    protected $model = TaskUser::class;

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
            //'assigned' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
