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
        Schema::create('fotos_animais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fotos_id');
            $table->unsignedBigInteger('animais_id');
            $table->foreign('fotos_id')->references('id')->on('fotos');
            $table->foreign('animais_id')->references('id')->on('animais');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fotos_animais', function (Blueprint $table) {
            $table->dropForeign("fotos_animais_fotos_id_foreign");
            $table->dropForeign("fotos_animais_animais_id_foreign");
        });

        Schema::dropIfExists('fotos_animais');
    }
};
