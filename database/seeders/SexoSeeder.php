<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sexos')->insert([
            [
                'codigo' => 'H',
                'nombre' => 'Hombre',
                'descripcion' =>'',
                'habilitado' => 'SI',
                'Extra_I:Sexo12' =>'1',
                'Extra_II' =>'01',
                'Extra_III' =>'M',
            ],
            [
                'codigo' => 'M',
                'nombre' => 'Mujer',
                'descripcion' =>'',
                'habilitado' => 'SI',
                'Extra_I:Sexo12' =>'2',
                'Extra_II' =>'02',
                'Extra_III' =>'F',
            ],
            [
                'codigo' => 'I',
                'nombre' => 'Hombre',
                'descripcion' =>'',
                'habilitado' => 'SI',
                'Extra_I:Sexo12' =>'3',
                'Extra_II' =>'03',
                'Extra_III' =>'M',
            ],
        ]);
    }
}
