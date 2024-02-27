<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RipsTipoUsuarioVersion2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('rips_tipo_usuario_version2')->insert([
            [
                'codigo' => '05001',
                'nombre' => 'CRISTIAN DE JESUS CORREA CALLE',
                'descripcion' => 'Profesional Independiente',
                'habilitado' => true,
            ],
        ]);
    }
}
