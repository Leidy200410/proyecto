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
        Schema::create('prestamo', function (Blueprint $table) {
            $table->id('id'); // Clave primaria por defecto
            $table->unsignedBigInteger('idequipo'); // Clave foránea para equipo
            $table->unsignedBigInteger('idusuario'); // Clave foránea para usuario
             // Clave foránea para usuario
            $table->date('fechaprestamo');
            $table->date('fechadevolucion');
            $table->timestamps();
        
            // Definir las relaciones con las tablas
            $table->foreign('idequipo')->references('id')->on('equipo')->onDelete('cascade');
            $table->foreign('idusuario')->references('id')->on('usuario')->onDelete('cascade');
        });
      }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamo');
    }
};
