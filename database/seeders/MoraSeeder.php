<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'iddevolucion' => 1, 
            'diastardanza' => 5, 
            'detalles' => 'Retraso en la entrega del equipo debido a problemas personales',
            'montomora' => 15.50, 
            'estadopago' => 'Pagado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'iddevolucion' => 2, 
            'diastardanza' => 3,
            'detalles' => 'El usuario olvidó devolver el equipo a tiempo',
            'montomora' => 10.25,
            'estadopago' => 'Pendiente',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('mora')->insert($data);
    }
}
