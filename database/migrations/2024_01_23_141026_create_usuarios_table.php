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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_transaccion')->nullable();
            $table->foreign('id_transaccion')
                ->references('id')->on('transacciones')
                ->onDelete('set null');
            $table->string('tipo_documento_identificacion', 2)->nullable();
            $table->string('num_documento_identificacion', 20)->unique();
            $table->string('tipo_usuario', 2)->nullable();
            $table->date('fecha_nacimiento')->format('Y-m-d')->nullable();
            $table->enum('cod_sexo', ['M','F','I'])->nullable()->comment('M = masculino F = Femenino , I = Indeterminado o Intersexual');
            $table->string('cod_pais_residencia', 3)->nullable();
            $table->string('cod_municipio_residencia', 5)->nullable();
            $table->string('cod_zona_territorial_residencia', 2)->nullable();
            $table->string('incapacidad', 2)->nullable();
            $table->integer('consecutivo')->nullable();
            $table->string('cod_pais_origen', 3)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
