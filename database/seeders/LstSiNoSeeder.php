<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LstSiNoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lsT_si_no')->insert([
            [
                'Codigo' => 'NO',
                'Nombre' => 'NO',
                'Habilitado' => true,
               
                'Extra_I:ListSINO12' => '2',
                'Extra_II:ListSINOSN' => 'N',
                'Extra_III:ListSINO10' => '0',
                'Extra_IV'=>'02'
               
            ],
            [
                'Codigo' => 'SI',
                'Nombre' => 'SI',
                'Habilitado' => true,
               
                'Extra_I:ListSINO12' => '1',
                'Extra_II:ListSINOSN' => 'S',
                'Extra_III:ListSINO10' => '1',
                'Extra_IV'=>'01'
               
            ],
        ]);
    }
}
