<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonaVersion2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zona_version2')->insert([
            [
                'codigo' => '01',
                'nombre' => 'Rural',
                'habilitado' => true,
            ],
            [
                'codigo' => '02',
                'nombre' => 'Urbano',
                'habilitado' => true,
            ],
        ]);
    }
}
