<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transacciones')->insert([
            [
                "numDocumentoIdObligado" => "814006170",
                "numFactura" => "CTFE226713",
                "tipoNota" => null,
                "numNota" => null,
            ],
            [
                "numDocumentoIdObligado" => "106343435",
                "numFactura" => "FE226713",
                "tipoNota" => null,
                "numNota" => null,
            ],
            [
                "numDocumentoIdObligado" => "606343435",
                "numFactura" => null,
                "tipoNota" => null,
                "numNota" => "NE226713",
            ],
        ]);
    }
}
