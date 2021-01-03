<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("title"); //Nom de la tâche
            $table->text("description");// Description de la tâche
            $table->date("due_date"); // Date de fin de la tâche
            $table->enum("state", ["todo", "ongoing", "done"])->default('todo');// Status de la tâche
            $table->foreignId("category_id")->nullable()->default(null)->constrained()->onDelete('set null'); //ID de la catégorie
            $table->foreignId("board_id")->constrained()->onDelete('cascade'); //ID de la board
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
        Schema::dropIfExists('tasks');
    }
}
