<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre' => 'Laptop Dell XPS 13',
            'descripcion' => 'Laptop ultra portátil con procesador Intel i7 y 16GB RAM',
            'estado' => 'Disponible',
            'fecharegistro' => Carbon::now()->toDateString(),
            'estadoequipo' => 'Buen estado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'nombre' => 'Proyector Epson',
            'descripcion' => 'Proyector Full HD, 3200 lúmenes',
            'estado' => 'Prestado',
            'fecharegistro' => Carbon::now()->toDateString(),
            'estadoequipo' => 'Ligero desgaste',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('equipo')->insert($data);
    }
}
