<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name, // Nom de l'utilisateur
            'email' => $this->faker->unique()->safeEmail, // Adresse mail de l'utilisateur
            'email_verified_at' => now(), // Vérification de la validité de l'adresse mail
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // Mot de passe Hashé
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
