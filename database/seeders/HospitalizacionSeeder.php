<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hospitalizaciones')->insert([
            [
                'id_usuario'=>1,
                'codPrestador' => '500000000001',
                'viaIngresoServicioSalud' => '01',
                'fechaInicioAtencion' => '2021-08-18 08:10',
                'numAutorizacion' => '0000000',
                'causaMotivoAtencion' => '01',
                'codDiagnosticoPrincipal' => 'J189',
                'codDiagnosticoPrincipalE' => 'J189',
                'codDiagnosticoRelacionadoE1' => 'K12.9',
                'codDiagnosticoRelacionadoE2' => 'J39.0',
                'codDiagnosticoRelacionadoE3' => 'J89.0',
                'codComplicacion' =>"T66.2",
                'condicionDestinoUsuarioEgreso' => '02',
                'codDiagnosticoCausaMuerte' => 'J189',
                'fechaEgreso' => '2021-08-20 08:10',
                'consecutivo' => 1,
            ],
            [
                'id_usuario'=>2,
                'codPrestador' => '500000000001',
                'viaIngresoServicioSalud' => '02',
                'fechaInicioAtencion' => '2021-08-19 08:10',
                'numAutorizacion' => '0000001',
                'causaMotivoAtencion' => '03',
                'codDiagnosticoPrincipal' => 'J45.9',
                'codDiagnosticoPrincipalE' => 'J45.9',
                'codDiagnosticoRelacionadoE1' => 'J41.1',
                'codDiagnosticoRelacionadoE2' => 'J41.1',
                'codDiagnosticoRelacionadoE3' => 'J41.1',
                'codComplicacion' => 'T88.6',
                'condicionDestinoUsuarioEgreso' => '01',
                'codDiagnosticoCausaMuerte' => 'J189',
                'fechaEgreso' => '2021-08-21 08:10',
                'consecutivo' => 2,
            ],
            // ... (Agregar más registros de ejemplo)
        ]);
    }
}
