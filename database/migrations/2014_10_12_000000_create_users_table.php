<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();  //ID de la table
            $table->string('name'); //Nom de l'utilisateur
            $table->string('email')->unique(); // Adresse mail de l'utilisateur
            $table->timestamp('email_verified_at')->nullable(); // Vérifie la validité de l'addrsse email
            $table->string('password'); // Mot de passe du compte
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
