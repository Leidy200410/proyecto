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
        Schema::create('mora', function (Blueprint $table) {
            $table->id('idmora'); // Clave primaria
            $table->unsignedBigInteger('iddevolucion'); // Clave foránea para devolución
            $table->integer('diastardanza'); // Sin límite, solo el tipo de dato
            $table->string('detalles', 200);
            $table->decimal('montomora', 10, 2);
            $table->string('estadopago', 50);
            $table->timestamps();
        
            // Definir la relación con la tabla devolucion
            $table->foreign('iddevolucion')->references('id')->on('devolucion')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mora');
    }
};
