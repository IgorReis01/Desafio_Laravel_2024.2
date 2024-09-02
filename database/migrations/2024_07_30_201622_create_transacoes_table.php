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
        Schema::create('transacoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('valor');
            $table->unsignedBigInteger('destinatario');
            $table->unsignedBigInteger('remetente');
            $table->string('tipo');
            $table->foreign('destinatario')->references('id')->on('conta_bancarias');
            $table->foreign('remetente')->references('id')->on('conta_bancarias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacoes');
    }
};
