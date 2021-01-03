<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->binary("file"); // Chemin du fichier
            $table->string("filename"); // Nom du fichier
            $table->integer("size"); // Taille du fichier
            $table->string("type"); // Type du fichier
            $table->foreignId("user_id")->nullable()->constrained()->onDelete("set null"); // ID de l'utilisateur
            $table->foreignId("task_id")->constrained()->onDelete("cascade"); // ID de la tâche
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
        Schema::dropIfExists('attachments');
    }
}
