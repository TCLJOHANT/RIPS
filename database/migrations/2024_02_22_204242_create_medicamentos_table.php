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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')
                ->references('id')->on('usuarios')
                ->onDelete('set null');
             // Campos adicionales del medicamento
            $table->string('codPrestador', 12);
            $table->string('numAutorizacion', 30);
            $table->string('idMIPRES',15)->nullable();
            $table->dateTime('fechaDispensAdmon');
            $table->string('codDiagnosticoPrincipal', 25);
            $table->string('codDiagnosticoRelacionado', 25);
            $table->string('tipoMedicamento', 2);
            $table->string('codTecnologiaSalud', 20);
            $table->string('nomTecnologiaSalud', 30);
            $table->decimal('concentracionMedicamento', 10, 2);
            $table->integer('unidadMedida')->nullable();
            $table->string('formaFarmaceutica')->nullable();
            $table->integer('unidadMinDispensa');
            $table->integer('cantidadMedicamento');
            $table->integer('diasTratamiento');
            $table->string('tipoDocumentoIdentificacion', 2);
            $table->string('numDocumentoIdentificacion', 20);
            $table->decimal('vrUnitMedicamento', 10, 2);
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
        Schema::dropIfExists('medicamentos');
    }
};
