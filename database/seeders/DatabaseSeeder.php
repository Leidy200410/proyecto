<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            EmpleadoSeeder::class,
            UsuarioSeeder::class,
            EquipoSeeder::class,
            PrestamoSeeder::class,
            InformesSeeder::class,  
            PagoSeeder::class, 
            DevolucionSeeder::class,    
            MoraSeeder::class,  
    
        ]);
        

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
