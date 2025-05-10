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
        Schema::create('piso', function (Blueprint $table) {
            $table->id();
            $table->forreignId('hotel_id')->constrained('hotels')->onDelete('cascade');
            $table->int('numeropiso');
            $table->string('numerotoalhabitaciones');
            $table->string('pisorestante');
            $table->string('pisosalon');
            $table->int('numerototalhabitaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piso');
    }
};
