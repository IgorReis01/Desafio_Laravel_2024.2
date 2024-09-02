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
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('valor');
            $table->double('divida');
            $table->unsignedBigInteger('conta_bancaria');
            $table->unsignedBigInteger('gerente_id');
            $table->foreign('conta_bancaria')->references('id')->on('conta_bancarias');
            $table->foreign('gerente_id')->references('id')->on('gerentes');
            $table->boolean('aprovado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
