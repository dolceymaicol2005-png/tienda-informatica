<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('categoria'); // Portatiles, Ratones, Impresoras
            $table->decimal('precio', 10, 2);
            $table->text('descripcion')->nullable();
            $table->json('imagenes'); // Arreglo JSON de cadenas Base64
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};