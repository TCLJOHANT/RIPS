<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OtroServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('otros_servicios')->insert([
            [
                'codPrestador' => '500000000001',
                'numAutorizacion' => '00',
                'idMIPRES' => '9999',
                'fechaSuministroTecnologia' => '2021-08-18 08:10',
                'tipoOS' => '01',
                'codTecnologiaSalud' => 'T2387G',
                'nomTecnologiaSalud' => 'Dispositivo 1',
                'cantidadOS' => 120,
                'tipoDocumentoIdentificacion' => 'CC',
                'numDocumentoIdentificacion' => '80122000',
                'vrUnitOS' => 12000,
                'vrServicio' => 12000,
                'conceptoRecaudo' => '02',
                'valorPagoModerador' => 5000,
                'numFEVPagoModerador' => 'FVE15',
                'consecutivo' => 1,
            ],
            [
                'codPrestador' => '500000000001',
                'numAutorizacion' => '01',
                'idMIPRES' => '9998',
                'fechaSuministroTecnologia' => '2021-08-19 08:10',
                'tipoOS' => '02',
                'codTecnologiaSalud' => 'T2387H',
                'nomTecnologiaSalud' => 'Dispositivo 2',
                'cantidadOS' => 100,
                'tipoDocumentoIdentificacion' => 'CE',
                'numDocumentoIdentificacion' => '80122001',
                'vrUnitOS' => 10000,
                'vrServicio' => 10000,
                'conceptoRecaudo' => '01',
                'valorPagoModerador' => 4000,
                'numFEVPagoModerador' => 'FVE16',
                'consecutivo' => 2,
            ],
            [
                'codPrestador' => '500000000001',
                'numAutorizacion' => '02',
                'idMIPRES' => '9997',
                'fechaSuministroTecnologia' => '2021-08-20 08:10',
                'tipoOS' => '03',
                'codTecnologiaSalud' => 'T2387I',
                'nomTecnologiaSalud' => 'Dispositivo 3',
                'cantidadOS' => 80,
                'tipoDocumentoIdentificacion' => 'TI',
                'numDocumentoIdentificacion' => '80122002',
                'vrUnitOS' => 8000,
                'vrServicio' => 8000,
                'conceptoRecaudo' => '02',
                'valorPagoModerador' => 3000,
                'numFEVPagoModerador' => 'FVE17',
                'consecutivo' => 3,
            ],
        ]);
    }
}
