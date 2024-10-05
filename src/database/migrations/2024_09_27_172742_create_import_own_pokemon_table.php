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
        Schema::create('import_own_pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('ポケモン名')->nullable(false);
            $table->string('ニックネーム')->nullable();
            $table->integer('sp')->nullable(false);
            $table->integer('lv')->nullable(false);
            $table->string('食材lv1')->nullable(false);
            $table->string('食材lv30')->nullable(false);
            $table->string('食材lv60')->nullable(false);
            $table->string('メインスキル')->nullable(false);
            $table->string('サブスキルlv1')->nullable(false);
            $table->string('サブスキルlv25')->nullable(false);
            $table->string('サブスキルlv50')->nullable(false);
            $table->string('サブスキルlv75')->nullable(false);
            $table->string('サブスキルlv100')->nullable(false);
            $table->string('性格')->nullable(false);
            $table->string('備考')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('import_own_pokemon');
    }
};
