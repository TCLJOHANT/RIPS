<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IpsNoRepSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ips_no_reps')->insert([
            [
                'Codigo' => '05001',
                'Nombre' => 'CLÍNICA LAS VEGAS IPS',
                'Descripcion' => 'IPS Privada de mediana complejidad',
                'Habilitado' => true,
                'Aplicacion' => 'CC',
                'IsStandardGEL' => false,
                'IsStandardMSPS' => false,
                'Extra_I:Telefono' => '4444444',
                'Extra_II:Gerente' => 'Dr. Juan Pérez',
                'Extra_III:Regimen' => 'ECOPETROL',
                'Extra_IV:CodDepartamento' => '05',
                'Extra_V:Departamento' => 'ANTIOQUIA',
                'Extra_VI:CodMunicipio' => '05001',
                'Extra_VII:Municipio' => 'MEDELLÍN',
                'Extra_VIII:TipoIPS' => '1',
                'Extra_IX:NivelAtencion' => '2',
                'Extra_X:NIT' => '900000001',
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
