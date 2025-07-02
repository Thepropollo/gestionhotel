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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('detalle');
            $table->float('total');
            $table->string('metodo_pago'); 
            $table->date('fecha_emision');
            $table->date('fecha_vencimiento')->nullable();
            $table->string('numero_factura')->unique(); 
            $table->string('codigo_autorizacion')->nullable(); 
            $table->float('precio_unitario')->default(0);
            $table->integer('cantidad')->default(1);
            $table->float('precio_total')->default(0);
            $table->foreignId('reserva_id')->constrained('reservas')->onDelete('cascade');
            $table->foreignId('hotel_id')->constrained('hotels')->onDelete('cascade');
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('estado_id')->constrained('estados')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
