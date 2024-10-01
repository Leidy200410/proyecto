<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre' => 'Ana López',
            'dui' => '12345678-9',
            'gmail' => 'ana@example.com',
            'direccion' => 'Calle Falsa 123, Ciudad',
            'telefono' => '76543210',
            'fecharegistro' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
                'nombre' => 'Ana Martínez',
                'dui' => '9876543210',
                'gmail' => 'ana@gmail.com',
                'direccion' => 'Calle 2',
                'telefono' => '87654321',
                'fecharegistro' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            
        //Insertamos la data en la tabla 
    ]);
    DB::table('usuario')->insert($data);
    }
}
