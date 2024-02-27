<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoIdPisisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_id_pisis')->insert([
            [
                'Codigo' => 'AS',
                'Nombre' => 'Adulto sin identificación',
                'Descripcion' => 'Persona adulta sin ningún tipo de identificación oficial.',
                'Habilitado' => true,
                'Aplicacion' => null,
                'IsStandardGEL' => true,
                'IsStandardMSPS' => true,
                'Extra_I' => null,
                'Extra_II' => 'AC',
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
                'Fecha_Actualizacion' => '2021-05-29 20:41:35',
                'IsPublicPrivate' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
