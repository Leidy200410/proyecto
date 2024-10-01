<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre' => 'Juan Pérez',
            'apellido' => 'Lopez Rodas',
            'cargo' => 'Administrador',
            'dui' => '2333092-2',
            'telefono' => '12345678',
            'created_at'=>Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //Insertamos la data en la tabla 
        DB::table('empleado')->insert($data);
    }
    }