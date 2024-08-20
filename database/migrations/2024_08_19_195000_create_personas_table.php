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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();  // Crea una columna 'id' auto-incremental y clave primaria
            $table->string('Nombre', 200)->nullable();  // Crea una columna 'Nombre' con longitud de 200 caracteres
            $table->string('direccion', 200)->nullable();  // Crea una columna 'direccion' con longitud de 200 caracteres
            $table->string('tipo_persona', 200)->nullable();  // Crea una columna 'tipo_persona' con longitud de 200 caracteres
            $table->bigInteger('telefono')->nullable();  // Crea una columna 'telefono' de tipo bigInteger
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
