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
    Schema::create('cadastro', function (Blueprint $table) {
        $table->id(); // ID (chave primária)
        $table->string('nome', 100);
        $table->string('endereco', 150);
        $table->string('telefone', 20);
        $table->string('cnpj', 20)->unique();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro');
    }
};
