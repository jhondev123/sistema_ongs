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
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome")->nullable();
            $table->string("tipo_animal")->nullable();
            $table->integer("idade")->nullable();
            $table->string("raça")->nullable();
            $table->char("sexo")->nullable();
            $table->char("castrado");
            $table->char("vacinado");
            $table->char("adotado");
            $table->string("porte");
            $table->text("descrição");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animais');
    }
};
