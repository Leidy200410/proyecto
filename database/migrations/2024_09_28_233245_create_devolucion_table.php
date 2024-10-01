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
        Schema::create('devolucion', function (Blueprint $table) {
            $table->id('id'); 
            $table->unsignedBigInteger('idprestamo'); // Clave foránea para préstamo
            $table->string('estadoequipo', 100);
            $table->string('observaciones', 200);
            $table->timestamps();
        
            // Definir la relación con la tabla prestamo
            $table->foreign('idprestamo')->references('id')->on('prestamo')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devolucion');
    }
};
