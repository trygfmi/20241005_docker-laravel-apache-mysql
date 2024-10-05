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
        Schema::create('choice_pokemon_constraineds', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('name');
            $table->unique(['id', 'name']);
            $table->foreignid('create_pokemon_template_id')->constrained('create_pokemon_templates')->onDelete('cascade');
            $table->foreignid('create_pokemon_template2_id')->constrained('create_pokemon_template2s')->onDelete('cascade');
            $table->foreignid('create_pokemon_template3_id')->constrained('create_pokemon_template3s')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choice_pokemon_constraineds');
    }
};
