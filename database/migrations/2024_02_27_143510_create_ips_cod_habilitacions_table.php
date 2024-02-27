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
        Schema::create('ips_cod_habilitacion', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 10)->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('descripcion', 255)->nullable();
            $table->boolean('habilitado')->nullable();
            $table->string('aplicacion', 50)->nullable();
            $table->boolean('IsStandardGEL')->nullable();
            $table->boolean('IsStandardMSPS')->nullable();
            $table->string('Extra_I:TipoIDPrestador', 2)->nullable();
            $table->string('Extra_II:NroIDPrestador', 20)->nullable();
            $table->string('Extra_III:CodigoPrestador', 20)->nullable();
            $table->string('Extra_IV:CodMpioSede', 5)->nullable();
            $table->string('Extra_V:NombreMpioSede', 100)->nullable();
            $table->string('Extra_VI:NombreDptoSede', 100)->nullable();
            $table->string('Extra_VII:ClasePrestador', 2)->nullable();
            $table->string('Extra_VIII:NomClasePrestador', 100)->nullable();
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
        Schema::dropIfExists('ips_cod_habilitacion');
    }
};
