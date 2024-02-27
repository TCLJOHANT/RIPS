<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoNotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_notas')->insert([
            [
                'Codigo' => '01',
                'Nombre' => 'Nota de Evolución',
                'Descripcion' => 'Nota que registra el progreso del paciente durante su atención médica.',
                'Habilitado' => true,
                'Aplicacion' => 'CC',
                'IsStandardGEL' => true,
                'IsStandardMSPS' => true,
                'Extra_I' => null,
                'Extra_II' => null,
                'Extra_III' => null,
                'Extra_IV' => null,
                'Extra_V' => null,
                'Extra_VI' => null,
                'Extra_VII' => null,
                'Extra_VIII' => null,
                'Extra_IX' => null,
                'Extra_X' => null,
                'ValorRegistro' => null,
                'UsuarioResponsable' => null,
                'Fecha_Actualizacion' => '2024-02-26 12:00:00',
                'IsPublicPrivate' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Codigo' => '02',
                'Nombre' => 'Nota de Interconsulta',
                'Descripcion' => 'Nota que registra la opinión de un especialista sobre un caso médico.',
                'Habilitado' => true,
                'Aplicacion' => 'CC',
                'IsStandardGEL' => true,
                'IsStandardMSPS' => true,
                'Extra_I' => null,
                'Extra_II' => null,
                'Extra_III' => null,
                'Extra_IV' => null,
                'Extra_V' => null,
                'Extra_VI' => null,
                'Extra_VII' => null,
                'Extra_VIII' => null,
                'Extra_IX' => null,
                'Extra_X' => null,
                'ValorRegistro' => null,
                'UsuarioResponsable' => null,
                'Fecha_Actualizacion' => '2024-02-26 12:00:00',
                'IsPublicPrivate' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
