<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class InformesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'idequipo' => 1, // ID de un equipo ficticio
            'fechainforme' => Carbon::now()->subDays(10),
            'detalles' => 'Informe detallado del equipo en buen estado.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'idequipo' => 2, // Otro ID de equipo ficticio
            'fechainforme' => Carbon::now()->subDays(5),
            'detalles' => 'El equipo presenta un leve desgaste en la batería.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('informes')->insert($data);
    }
}
