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
        Schema::create('otros_servicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')
                ->references('id')->on('usuarios')
                ->onDelete('set null');
             // Campos adicionales del otro servicio
            $table->string('codPrestador', 12);
            $table->string('numAutorizacion', 30);
            $table->string('idMIPRES',15)->nullable();
            $table->dateTime('fechaSuministroTecnologia');
            $table->string('tipoOS', 2);
            $table->string('codTecnologiaSalud', 20);
            $table->string('nomTecnologiaSalud', 255);
            $table->integer('cantidadOS');
            $table->string('tipoDocumentoIdentificacion', 2);
            $table->string('numDocumentoIdentificacion', 20);
            $table->decimal('vrUnitOS', 10, 2);
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
        Schema::dropIfExists('otros_servicios');
    }
};
