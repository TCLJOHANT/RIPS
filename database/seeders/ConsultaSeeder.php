<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('consultas')->insert([
            [
                'codPrestador' => '500000000001',
                'fechaInicioAtencion' => '2021-08-18 08:10',
                'numAutorizacion' => '0000000',
                'codConsulta' => '010101',
                'modalidadGrupoServicioTecSal' => '01',
                'grupoServicios' => '01',
                'codServicio' => 1234,
                'finalidadTecnologiaSalud' => '02',
                'causaMotivoAtencion' => '01',
                'codDiagnosticoPrincipal' => 'J189',
                'codDiagnosticoRelacionado1' => 'K12.9',
                'codDiagnosticoRelacionado2' => null,
                'codDiagnosticoRelacionado3' => null,
                'tipoDiagnosticoPrincipal' => '1',
                'tipoDocumentoIdentificacion' => 'CC',
                'numDocumentoIdentificacion' => '79100200',
                'vrServicio' => 30000,
                'conceptoRecaudo' => '02',
                'valorPagoModerador' => 10000,
                'numFEVPagoModerador' => 'FVE14',
                'consecutivo' => 1,
            ],
            [
                'codPrestador' => '500000000001',
                'fechaInicioAtencion' => '2021-08-19 08:10',
                'numAutorizacion' => '0000001',
                'codConsulta' => '010102',
                'modalidadGrupoServicioTecSal' => '02',
                'grupoServicios' => '02',
                'codServicio' => 5678,
                'finalidadTecnologiaSalud' => '01',
                'causaMotivoAtencion' => '03',
                'codDiagnosticoPrincipal' => 'J45.9',
                'codDiagnosticoRelacionado1' => null,
                'codDiagnosticoRelacionado2' => null,
                'codDiagnosticoRelacionado3' => null,
                'tipoDiagnosticoPrincipal' => '2',
                'tipoDocumentoIdentificacion' => 'CE',
                'numDocumentoIdentificacion' => '80122001',
                'vrServicio' => 25000,
                'conceptoRecaudo' => '01',
                'valorPagoModerador' => 5000,
                'numFEVPagoModerador' => 'FVE15',
                'consecutivo' => 2,
            ],
            // ... (Agregar más registros de ejemplo)
        ]);
    }
}
