<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SexoSeeder::class, 
            PaisSeeder::class,
            MunicipioSeeder::class,
            ZonaVersion2Seeder::class,
            LstSiNoSeeder::class,
            IpsCodHabilitacionSeeder::class,
           IpsNoRepSeeder::class,
            RipsTipoUsuarioVersion2Seeder::class,
            TipoIdPisisSeeder::class,
            TipoNotaSeeder::class,


            TransaccionSeeder::class,
            UsuarioSeeder::class,
            ConsultaSeeder::class,
            HospitalizacionSeeder::class,
            MedicamentoSeeder::class,
            OtroServicioSeeder::class,
            ProcedimientoSeeder::class,
            RecienNacidoSeeder::class,
            UrgenciaSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

           
    }
}
