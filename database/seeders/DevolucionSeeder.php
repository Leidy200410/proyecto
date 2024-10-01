<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DevolucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'idprestamo' => 1, 
            'estadoequipo' => 'En buen estado',
            'observaciones' => 'Equipo devuelto sin daños aparentes.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'idprestamo' => 2, 
            'estadoequipo' => 'Con ligeros rasguños',
            'observaciones' => 'El equipo presenta pequeños rasguños en la carcasa.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('devolucion')->insert($data);
    }
}
