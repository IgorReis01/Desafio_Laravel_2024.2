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
            $table->foreign('conta_bancaria')->references('id')->on('conta_bancaria');
            $table->foreign('gerente')->references('id')->on('conta_bancaria');
            $table->foreign('gerente_conta_bancaria')->references('id')->on('conta_bancaria');
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
