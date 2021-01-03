<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string("title"); // Nom de la board
            $table->text("description")->nullable(); // Description de la board
            // $table->unsignedBigInteger("user_id"); 
            // $table->foreign('user_id')->references("id")->on(("user"))->setNullOnDelete();
            $table->foreignId("user_id")->nullable()->constrained()->onDelete("set null"); // ID de l'utilisateur
            // $table->foreignId("user_id")->nullable()->constrained()->setNullOnDelete();
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
        Schema::dropIfExists('boards');
    }
}
