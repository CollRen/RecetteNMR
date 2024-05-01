<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingredient_recette', function (Blueprint $table) {
            $table->text('quantite');
            $table->unsignedBigInteger('recette_id');
            $table->unsignedBigInteger('ingredient_id');

            // $table->timestamps();

            $table->foreign('ingredient_id')->references('id')
                ->on('ingredients')->onDelete('cascade');
            $table->foreign('recette_id')->references('id')
                ->on('recettes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_recette');
    }
};
