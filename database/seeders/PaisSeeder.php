<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pais')->insert([
            [
                'codigo' => '0001',
                'nombre' => 'Colombia',
                'habilitado' => true,
                'Extra_II' => 'CO',
                'Extra_III'=> 'COL',
            ],
        ]);
    }
}
