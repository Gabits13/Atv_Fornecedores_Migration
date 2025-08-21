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
    Schema::table('cadastro', function (Blueprint $table) {
        $table->string('razao_social', 150)->after('cnpj');
        $table->string('nome_fantasia', 150)->after('razao_social');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cadastro', function (Blueprint $table) {
            //
        });
    }
};
