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
        Schema::create('register_shell_scripts', function (Blueprint $table) {
            $table->id();
            $table->string('shell_script_file_name');
            $table->string('argument');
            $table->string('shell_script_code');
            $table->string('execute_example');
            $table->string('prepare_execute_shell_script');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_shell_scripts');
    }
};
