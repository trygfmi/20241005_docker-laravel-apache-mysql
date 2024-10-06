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
        Schema::create('own_pokemon_completes', function (Blueprint $table) {
            $table->id('id');
            $table->string('own_pokemon_name');
            $table->string('nickname')->nullable();
            $table->integer('sp');
            $table->integer('lv');
            $table->string('food_lv1');
            $table->string('food_lv30');
            $table->string('food_lv60');
            $table->string('main_skill');
            $table->string('sub_skill_lv1');
            $table->string('sub_skill_lv25');
            $table->string('sub_skill_lv50');
            $table->string('sub_skill_lv75');
            $table->string('sub_skill_lv100');
            $table->string('personality');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('own_pokemon_completes');
    }
};
