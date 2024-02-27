<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('municipios')->insert([
            [
                'codigo' => '0001',
                'nombre' => 'Cali',
                'habilitado' => true,
                'Extra_I:Departamento' => '076',
            ],
        ]);
    }
}
