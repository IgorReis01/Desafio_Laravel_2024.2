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
        Schema::create('pendencias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->double('limite');
            $table->unsignedBigInteger('gerentes');
            $table->unsignedBigInteger('transferencia_bancaria');
            $table->foreign('gerentes')->references('id')->on('gerentes');
            $table->foreign('transferencia_bancaria')->references('id')->on('transacoes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendencias');
    }
};
