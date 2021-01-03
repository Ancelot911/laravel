<?php

namespace Database\Factories;

use App\Models\{Task, User, Category, Board};
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {

        $dt = $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+3 months');
        $date = $dt->format("Y-m-d"); // 1994-09-24
        return [
            //'user_id' => User::factory(),
            'board_id' => Board::factory(), // ID de la board
            'title' => $this->faker->sentence, // Nom de la tâche
            'description' => $this->faker->paragraph, // Description de la tâche
            'due_date' => $date, //Date de fin de la tâche
            'state' => $this->faker->randomElement(['todo' ,'ongoing', 'done']), // Statut de la tâche
            'category_id' => Category::factory(), // ID de la catégorie
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
