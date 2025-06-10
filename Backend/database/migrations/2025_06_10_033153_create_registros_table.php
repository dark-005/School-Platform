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
        Schema::create('registros', function (Blueprint $table) {
    $table->id();

    $table->unsignedBigInteger('vehiculo_id');
    $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');

    $table->unsignedBigInteger('espacio_parqueo_id');
    $table->foreign('espacio_parqueo_id')->references('id')->on('espacios_parqueo')->onDelete('cascade');

    $table->timestamp('hora_entrada');
    $table->timestamp('hora_salida')->nullable();
    $table->decimal('total_a_pagar')->nullable();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
