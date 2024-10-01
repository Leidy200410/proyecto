<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'idequipo' => 1,
            'idusuario' => 1, 
            'fechaprestamo' => Carbon::now()->subDays(7),
            'fechadevolucion' => Carbon::now()->addDays(7),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'idequipo' => 2, 
            'idusuario' => 2, 
            'fechaprestamo' => Carbon::now()->subDays(10),
            'fechadevolucion' => Carbon::now()->addDays(4),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('prestamo')->insert($data);
    }
}
