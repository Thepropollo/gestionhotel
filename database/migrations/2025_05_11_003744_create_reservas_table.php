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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('servicio_id')->nullable()->constrained('servicios')->onDelete('set null');
            $table->foreignId('mesa_id')->nullable()->constrained('mesas')->onDelete('set null');
            $table->foreignId('salon_id')->nullable()->constrained('salons')->onDelete('set null');
            $table->foreignId('habitacion_id')->nullable()->constrained('habitacions')->onDelete('set null');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('estado_id')->constrained('estados')->onDelete('cascade');
            $table->json('objetos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
