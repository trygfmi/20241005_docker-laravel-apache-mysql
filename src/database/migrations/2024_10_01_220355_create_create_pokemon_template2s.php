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
        Schema::create('create_pokemon_template2s', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->foreignid('food_lv1_id')->constrained('foodlv1s')->onDelete('cascade');
            $table->foreignid('food_lv30_id')->constrained('foodlv30s')->onDelete('cascade');
            $table->foreignid('food_lv60_id')->constrained('foodlv60s')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_pokemon_template2s');
    }
};
