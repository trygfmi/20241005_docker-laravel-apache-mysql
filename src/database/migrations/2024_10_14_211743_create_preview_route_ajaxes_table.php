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
        Schema::create('preview_route_ajaxes', function (Blueprint $table) {
            $table->id();
            $table->string('view_file_name')->nullable();
            $table->string('route_url')->nullable();
            $table->string('controller')->nullable();
            $table->string('middleware')->nullable();
            $table->string('get_method')->nullable();
            $table->string('get_helper_name')->nullable();
            $table->string('post_method')->nullable();
            $table->string('post_helper_name')->nullable();
            $table->string('model')->nullable();
            $table->string('table_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preview_route_ajaxes');
    }
};
