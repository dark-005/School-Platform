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
        Schema::create('espacios_parqueo', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('tipo');
            $table->boolean('disponible');
            $table->timestamp('creado_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espacios_parqueo');
    }
};
