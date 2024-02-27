<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrgenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('urgencias')->insert([
            [
                'id_usuario'=>1,
                'codPrestador' => '500000000001',
                'fechaInicioAtencion' => '2024-02-22 10:00:00',
                'causaMotivoAtencion' => '01', // Assuming 01 represents 'Accidente de tránsito'
                'codDiagnosticoPrincipal' => 'S02.9', // Open wound, unspecified
                'codDiagnosticoPrincipalE' => 'S02.9', // Assuming 'E' signifies 'Egreso'
                'codDiagnosticoRelacionadoE1' => 'T79.9', // Injury of unspecified cause
                'codDiagnosticoRelacionadoE2' => 'T76.9',
                'codDiagnosticoRelacionadoE3' => 'T77.9',
                'condicionDestinoUsuarioEgreso' => '01', // Assuming 01 represents 'Home'
                'codDiagnosticoCausaMuerte' => 'T78.9',
                'fechaEgreso' => '2024-02-22 12:00:00',
                'consecutivo' => 1,
            ],
            [
                'id_usuario'=>2,
                'codPrestador' => '500000000002',
                'fechaInicioAtencion' => '2024-02-22 11:00:00',
                'causaMotivoAtencion' => '02', // Assuming 02 represents 'Mal súbito'
                'codDiagnosticoPrincipal' => 'I49.9', // Unspecified ischemic heart disease
                'codDiagnosticoPrincipalE' => 'I49.9',
                'codDiagnosticoRelacionadoE1' => 'I25.1', // Hypertensive heart disease with (acute) heart failure
                'codDiagnosticoRelacionadoE2' => 'T69.9',
                'codDiagnosticoRelacionadoE3' => 'T99.9',
                'condicionDestinoUsuarioEgreso' => '02', // Assuming 02 represents 'Hospitalización'
                'codDiagnosticoCausaMuerte' => 'T89.9',
                'fechaEgreso' => '2024-02-22 15:00:00',
                'consecutivo' => 2,
            ],
            // Add more sample data as needed
        ]);
    }
}
