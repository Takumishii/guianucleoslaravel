<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('apuntes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nucleo_id')->constrained('nucleos')->onDelete('cascade');
            $table->string('titulo');
            $table->text('contenido');
            $table->text('codigo_ejemplo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apuntes');
    }
};