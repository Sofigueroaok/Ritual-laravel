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
    Schema::create('boxes', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('categoria'); // Skincare, Cuidado Corporal, Cuidado del Cabello
        $table->text('descripcion');
        $table->text('contenido');   // Qué productos trae adentro la box
        $table->decimal('precio', 10, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boxes');
    }
};
