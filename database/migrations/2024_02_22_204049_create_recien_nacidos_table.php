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
        Schema::create('recien_nacidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')
                ->references('id')->on('usuarios')
                ->onDelete('set null');
            // Campos adicionales del recién nacido
            $table->string('codPrestador', 12);
            $table->string('tipoDocumentoIdentificacion', 2);
            $table->string('numDocumentoIdentificacion', 20);
            $table->dateTime('fechaNacimiento');
            $table->integer('edadGestacional');
            $table->integer('numConsultasCPrenatal');
            $table->string('codSexoBiologico', 2);
            $table->decimal('peso', 4, 2);
            $table->string('codDiagnosticoPrincipal', 25);
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
        Schema::dropIfExists('recien_nacidos');
    }
};
