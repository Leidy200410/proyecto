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
        Schema::create('informes', function (Blueprint $table) {
            $table->id('id'); // Clave primaria con auto_increment
            $table->unsignedBigInteger('idequipo'); // Clave foránea para equipo
            $table->date('fechainforme');
            $table->string('detalles', 200);
            $table->timestamps();
        
            // Definir la relación con la tabla equipo
            $table->foreign('idequipo')->references('id')->on('equipo')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informes');
    }
};
