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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')
                ->references('id')->on('usuarios')
                ->onDelete('set null');
          
            $table->string('codPrestador', 12);
            $table->dateTime('fechaInicioAtencion');
            $table->string('numAutorizacion', 30);
            $table->string('codConsulta', 6);
            $table->string('modalidadGrupoServicioTecSal', 2);
            $table->string('grupoServicios', 2);
            $table->integer('codServicio');
            $table->string('finalidadTecnologiaSalud', 2);
            $table->string('causaMotivoAtencion', 2);
            $table->string('codDiagnosticoPrincipal', 25);
            $table->string('codDiagnosticoRelacionado1', 10)->nullable(); //observar validacion 
            $table->string('codDiagnosticoRelacionado2', 10)->nullable();
            $table->string('codDiagnosticoRelacionado3', 10)->nullable();
            $table->string('tipoDiagnosticoPrincipal', 2);
            $table->string('tipoDocumentoIdentificacion', 2);
            $table->string('numDocumentoIdentificacion', 20);
            $table->decimal('vrServicio', 10, 2);
            $table->string('conceptoRecaudo', 2);
            $table->decimal('valorPagoModerador', 10, 2);
            $table->string('numFEVPagoModerador', 20);
            $table->integer('consecutivo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
