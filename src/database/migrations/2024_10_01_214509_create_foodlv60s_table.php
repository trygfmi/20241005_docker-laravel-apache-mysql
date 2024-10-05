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
        Schema::create('foodlv60s', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('food1');
            $table->string('food2');
            $table->string('food3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foodlv60s');
    }
};
