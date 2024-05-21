<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hoteles_id')->constrained()->cascadeOnDelete();
            $table->foreignId('tipo_id')->constrained()->cascadeOnDelete();
            $table->float('precio');
            $table->integer('orden');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
