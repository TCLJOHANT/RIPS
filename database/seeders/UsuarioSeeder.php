<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'id_transaccion' => 1,
                'tipo_documento_identificacion' => 'CC',
                'num_documento_identificacion' => '52100200',
                'tipo_usuario' => '01',
                'fecha_nacimiento' => '2000-01-01',
                'cod_sexo' => 'M',
                'cod_pais_residencia' => '170',
                'cod_municipio_residencia' => '05134',
                'cod_zona_territorial_residencia' => '01',
                'incapacidad' => '02',
                'consecutivo' => 1,
                'cod_pais_origen' => '170',
            ],
            [
                'id_transaccion' => 2,
                'tipo_documento_identificacion' => 'CC',
                'num_documento_identificacion' => '78100200',
                'tipo_usuario' => '01',
                'fecha_nacimiento' => '1980-01-01',
                'cod_sexo' => 'F',
                'cod_pais_residencia' => '170',
                'cod_municipio_residencia' => '05134',
                'cod_zona_territorial_residencia' => '01',
                'incapacidad' => '02',
                'consecutivo' => 1,
                'cod_pais_origen' => '170',
            ],
        ]);
    }
}
