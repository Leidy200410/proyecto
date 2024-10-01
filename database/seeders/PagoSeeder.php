<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'idprestamo' => 1, 
                'monto' => 100.50, 
                'fechapago' => Carbon::now()->format('Y-m-d'),
                'tipopago' => 'Tarjeta de Crédito', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'idprestamo' => 2, 
                'monto' => 200.75,
                'fechapago' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'tipopago' => 'Transferencia Bancaria',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        DB::table('pago')->insert($data);

    }
}
