<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecienNacidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recien_nacidos')->insert([
            [
                'id_usuario'=>1,
                'codPrestador' => '500000000001',
                'tipoDocumentoIdentificacion' => 'RC',
                'numDocumentoIdentificacion' => '10184354743',
                'fechaNacimiento' => '2021-08-18 08:10',
                'edadGestacional' => 40,
                'numConsultasCPrenatal' => 2,
                'codSexoBiologico' => '01',
                'peso' => 18.25,
                'codDiagnosticoPrincipal' => 'K469',
                'condicionDestinoUsuarioEgreso' => '02',
                'codDiagnosticoCausaMuerte' => 'K469',
                'fechaEgreso' => '2021-08-18 08:10',
                'consecutivo' => 1,
            ],
            [
                'id_usuario'=>2,
                'codPrestador' => '500000000001',
                'tipoDocumentoIdentificacion' => 'RC',
                'numDocumentoIdentificacion' => '10184354744',
                'fechaNacimiento' => '2021-08-19 08:10',
                'edadGestacional' => 38,
                'numConsultasCPrenatal' => 1,
                'codSexoBiologico' => '02',
                'peso' => 17.25,
                'codDiagnosticoPrincipal' => 'P29.2',
                'condicionDestinoUsuarioEgreso' => '01',
                'codDiagnosticoCausaMuerte' => 'K469',
                'fechaEgreso' => '2021-08-19 08:10',
                'consecutivo' => 2,
            ],

        ]);
    }
}
