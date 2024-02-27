<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IpsCodHabilitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ips_cod_habilitacion')->insert([
            [
                'codigo' => '05001',
                'nombre' => 'CRISTIAN DE JESUS CORREA CALLE',
                'descripcion' => 'Profesional Independiente',
                'habilitado' => true,
                'aplicacion' => 'CC',
                'IsStandardGEL' => false,
                'IsStandardMSPS' => false,
                'Extra_I:TipoIDPrestador' => 'CC',
                'Extra_II:NroIDPrestador' => '53684205',
                'Extra_III:CodigoPrestador' => '0500100002',
                'Extra_IV:CodMpioSede' => '05001',
                'Extra_V:NombreMpioSede' => 'MEDELLÍN',
                'Extra_VI:NombreDptoSede' => 'ANTIOQUIA',
                'Extra_VII:ClasePrestador' => '2',
                'Extra_VIII:NomClasePrestador' => 'Profesional Independiente',
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
