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
        Schema::create('pais', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo', 10);
            $table->string('Nombre', 100);
            $table->string('Descripcion', 255)->nullable();
            $table->boolean('Habilitado')->nullable();
            $table->string('Aplicacion', 50)->nullable();
            $table->boolean('IsStandardGEL')->nullable();
            $table->boolean('IsStandardMSPS')->nullable();
            $table->string('Extra_I', 50)->nullable();
            $table->string('Extra_II', 50)->nullable();
            $table->string('Extra_III', 50)->nullable();
            $table->string('Extra_IV', 50)->nullable();
            $table->string('Extra_V', 50)->nullable();
            $table->string('Extra_VI', 50)->nullable();
            $table->string('Extra_VII', 50)->nullable();
            $table->string('Extra_VIII', 50)->nullable();
            $table->string('Extra_IX', 50)->nullable();
            $table->string('Extra_X', 50)->nullable();
            $table->string('ValorRegistro', 50)->nullable();
            $table->string('UsuarioResponsable', 50)->nullable();
            $table->timestamp('Fecha_Actualizacion')->nullable();
            $table->boolean('IsPublicPrivate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pais');
    }
};
