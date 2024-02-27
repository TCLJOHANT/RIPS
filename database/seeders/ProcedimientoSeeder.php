<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcedimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('procedimientos')->insert([
            [
                'id_usuario'=>1,
                'codPrestador' => '500000000001',
                'fechaInicioAtencion' => '2021-08-18 08:10',
                'idMIPRES' => '',
                'numAutorizacion' => '0000000',
                'codProcedimiento' => '010101',
                'viaIngresoServicioSalud' => '01',
                'modalidadGrupoServicioTecSal' => '01',
                'grupoServicios' => '01',
                'codServicio' => 1234,
                'finalidadTecnologiaSalud' => '02',
                'tipoDocumentoIdentificacion' => 'CC',
                'numDocumentoIdentificacion' => '79100200',
                'codDiagnosticoPrincipal' => 'J189',
                'codDiagnosticoRelacionado' => 'K12.9',
                'codComplicacion' => 'T88.5',
                'vrServicio' => 15000,
                'conceptoRecaudo' => '02',
                'valorPagoModerador' => 5000,
                'numFEVPagoModerador' => 'FVE14',
                'consecutivo' => 1,
            ],
            [
                'id_usuario'=>2,
                'codPrestador' => '500000000001',
                'fechaInicioAtencion' => '2021-08-19 08:10',
                'idMIPRES' => '9999',
                'numAutorizacion' => '0000001',
                'codProcedimiento' => '010102',
                'viaIngresoServicioSalud' => '02',
                'modalidadGrupoServicioTecSal' => '02',
                'grupoServicios' => '02',
                'codServicio' => 5678,
                'finalidadTecnologiaSalud' => '01',
                'tipoDocumentoIdentificacion' => 'CE',
                'numDocumentoIdentificacion' => '80122001',
                'codDiagnosticoPrincipal' => 'J45.9',
                'codDiagnosticoRelacionado' => 'J41.1',
                'codComplicacion' => 'T88.6',
                'vrServicio' => 20000,
                'conceptoRecaudo' => '01',
                'valorPagoModerador' => 2000,
                'numFEVPagoModerador' => 'FVE15',
                'consecutivo' => 2,
            ],
            // ... (Agregar más registros de ejemplo)
        ]);
    }
}
