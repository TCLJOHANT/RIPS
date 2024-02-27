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
        Schema::create('hospitalizaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')
                ->references('id')->on('usuarios')
                ->onDelete('set null');
             // Campos adicionales de la hospitalización
            $table->string('codPrestador', 12);
            $table->string('viaIngresoServicioSalud', 2);
            $table->dateTime('fechaInicioAtencion');
            $table->string('numAutorizacion', 30);
            $table->string('causaMotivoAtencion', 2);
            $table->string('codDiagnosticoPrincipal', 25);
            $table->string('codDiagnosticoPrincipalE', 25); // Probablemente "E" significa "Egreso"?
            $table->string('codDiagnosticoRelacionadoE1', 25)->nullable();
            $table->string('codDiagnosticoRelacionadoE2', 25)->nullable();
            $table->string('codDiagnosticoRelacionadoE3', 25)->nullable();
            $table->string('codComplicacion', 25)->nullable();
            $table->string('condicionDestinoUsuarioEgreso', 2);
            $table->string('codDiagnosticoCausaMuerte', 25)->nullable();
            $table->dateTime('fechaEgreso')->nullable();
            $table->integer('consecutivo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitalizaciones');
    }
};
