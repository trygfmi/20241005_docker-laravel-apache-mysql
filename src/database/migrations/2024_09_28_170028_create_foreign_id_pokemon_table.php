<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Food;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('foreign_id_pokemon', function (Blueprint $table) {
            // dd($table->foreignid('aaa')->constrained());
            $table->id();
            $table->string('ポケモン名')->nullable(false);
            $table->string('ニックネーム')->nullable();
            $table->integer('sp')->nullable(false);
            $table->integer('lv')->nullable(false);
            $table->string('食材lv1')->nullable(false);
            $table->string('食材lv30')->nullable(false);
            $table->string('食材lv60')->nullable(false);
            $table->foreignid('main_skill_id')->constrained('main_skills');
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
        Schema::dropIfExists('foregin_id_pokemon');
    }
};
