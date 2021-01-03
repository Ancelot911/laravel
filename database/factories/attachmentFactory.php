<?php

namespace Database\Factories;

use App\Models\{Attachment, Task, User};
use Illuminate\Database\Eloquent\Factories\Factory;

class AttachmentFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant.
     *
     * @var string
     */
    protected $model = Attachment::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        {
            return [
                'user_id' => User::factory(),// ID de l'utilisateur
                'task_id' => Task::factory(),// ID de la tâche
                'file' => base64_encode($this->faker->text), // Chemin du fichier
                'filename' => "toto.txt", // Nom du fichier
                'type' => $this->faker->mimeType(), // Type du fichier
                'size' => 256, // Taille du fichier
                'created_at' => now(), // Date de création
                'updated_at' => now(), // Date de la dernière mise à jour
    
            ];
        }
    }
}