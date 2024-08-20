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
        Schema::create('producto_venta', function (Blueprint $table) {
            $table->id(); // id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
            $table->foreignId('venta_id')->nullable()->constrained('ventas')->onDelete('cascade');
            $table->foreignId('producto_id')->nullable()->constrained('productos')->onDelete('cascade');
            $table->integer('cantidad')->nullable();
            $table->integer('precio_venta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_venta');
    }
};
