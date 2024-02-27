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
        Schema::create('ips_no_reps', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo', 10);
            $table->string('Nombre', 100)->nullable();
            $table->string('Descripcion', 255)->nullable();
            $table->boolean('Habilitado')->nullable()->comment('1 = SI (true) , 0 = No (false)');;
            $table->string('Aplicacion', 50)->nullable();
            $table->boolean('IsStandardGEL')->nullable();
            $table->boolean('IsStandardMSPS')->nullable();
            $table->string('Extra_I:Telefono', 20)->nullable();
            $table->string('Extra_II:Gerente', 100)->nullable();
            $table->string('Extra_III:Regimen')->nullable();
            $table->string('Extra_IV:CodDepartamento', 5)->nullable();
            $table->string('Extra_V:Departamento', 100)->nullable();
            $table->string('Extra_VI:CodMunicipio', 5)->nullable();
            $table->string('Extra_VII:Municipio', 100)->nullable();
            $table->string('Extra_VIII:TipoIPS', 2)->nullable();
            $table->string('Extra_IX:NivelAtencion', 2)->nullable();
            $table->string('Extra_X:NIT', 15)->nullable();
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
        Schema::dropIfExists('ips_no_reps');
    }
};
