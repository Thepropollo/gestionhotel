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
        Schema::create('habitacions', function (Blueprint $table) {
            $table->id();
            $table->integer('numerohabitacion');
            $table->integer('capacidadmaxima');
            $table->string('descripcion');
            $table->float('precio');
            $table->date('fechaagenda');
            $table->foreignId('piso_id')->constrained('pisos')->onDelete('cascade');
            $table->foreignId('estado_id')->constrained('estados')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitacions');
    }
};
