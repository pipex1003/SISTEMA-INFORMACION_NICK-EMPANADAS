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
        Schema::create('compra_matprimas', function (Blueprint $table) {
            $table->id(); // id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
            $table->foreignId('compra_id')->nullable()->constrained('compras')->onDelete('cascade');
            $table->foreignId('matprima_id')->nullable()->constrained('materias_primas')->onDelete('cascade');
            $table->integer('precio_compra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra_matprimas');
    }
};
