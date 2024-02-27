<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicamentos')->insert([
            [
                'id_usuario'=>1,
                'codPrestador' => '500000000001',
                'numAutorizacion' => '0000000',
                'idMIPRES' => '',
                'fechaDispensAdmon' => '2021-08-18 08:10',
                'codDiagnosticoPrincipal' => 'A080',
                'codDiagnosticoRelacionado' => 'A080',
                'tipoMedicamento' => '01',
                'codTecnologiaSalud' => '44405-3',
                'nomTecnologiaSalud' => 'CEFALEXINA 500 MG',
                'concentracionMedicamento' => 0,
                'unidadMedida' => 1,
                'formaFarmaceutica' => null,
                'unidadMinDispensa' => 1,
                'cantidadMedicamento' => 21,
                'diasTratamiento' => 21,
                'tipoDocumentoIdentificacion' => 'CC',
                'numDocumentoIdentificacion' => '79100200',
                'vrUnitMedicamento' => 555,
                'vrServicio' => 11655,
                'conceptoRecaudo' => '02',
                'valorPagoModerador' => 5000,
                'numFEVPagoModerador' => 'FVE14',
                'consecutivo' => 1,
            ],
            [
                'id_usuario'=>2,
                'codPrestador' => '500000000001',
                'numAutorizacion' => '0000001',
                'idMIPRES' => '9999',
                'fechaDispensAdmon' => '2021-08-19 08:10',
                'codDiagnosticoPrincipal' => 'J189',
                'codDiagnosticoRelacionado' => 'J189',
                'tipoMedicamento' => '02',
                'codTecnologiaSalud' => '12345-6',
                'nomTecnologiaSalud' => 'PARACETAMOL 500 MG',
                'concentracionMedicamento' => 500,
                'unidadMedida' => 2,
                'formaFarmaceutica' => 'TABLETA',
                'unidadMinDispensa' => 10,
                'cantidadMedicamento' => 30,
                'diasTratamiento' => 5,
                'tipoDocumentoIdentificacion' => 'CE',
                'numDocumentoIdentificacion' => '80122001',
                'vrUnitMedicamento' => 100,
                'vrServicio' => 3000,
                'conceptoRecaudo' => '01',
                'valorPagoModerador' => 1000,
                'numFEVPagoModerador' => 'FVE15',
                'consecutivo' => 2,
            ]
        ]);
    }
}
