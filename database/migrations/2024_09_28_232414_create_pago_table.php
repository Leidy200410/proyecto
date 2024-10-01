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
        Schema::create('pago', function (Blueprint $table) {
            $table->id('idpago'); // Solo esta columna tendrá auto_increment y será la primary key
            $table->unsignedBigInteger('idprestamo'); // Clave foránea relacionada con la tabla prestamo
            $table->decimal('monto', 10, 2);
            $table->date('fechapago');
            $table->string('tipopago', 150);
            $table->timestamps();
        
            // Definir la relación
            $table->foreign('idprestamo')->references('id')->on('prestamo')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
