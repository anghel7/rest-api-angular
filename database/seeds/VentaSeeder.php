<?php

use Illuminate\Database\Seeder;
use App\Venta;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Venta::create([
            'id_cliente' => 1,
            'nit' => 'SDF738DFD',
            'id_producto' => 1,
            'cantidad' => 2,
            'observacion' => 'NINGUNA'
          ]);
          Venta::create([
            'id_cliente' => 1,
            'nit' => 'SDF738DFD',
            'id_producto' => 2,
            'cantidad' => 4,
            'observacion' => 'NINGUNA'
          ]);
          Venta::create([
            'id_cliente' => 1,
            'nit' => 'SDF738DFD',
            'id_producto' => 3,
            'cantidad' => 9,
            'observacion' => 'NINGUNA'
          ]);
          Venta::create([
            'id_cliente' => 2,
            'nit' => '4874HH8DF',
            'id_producto' => 3,
            'cantidad' => 1,
            'observacion' => 'NINGUNA'
          ]);
          Venta::create([
            'id_cliente' => 2,
            'nit' => '4874HH8DF',
            'id_producto' => 4,
            'cantidad' => 9,
            'observacion' => 'NINGUNA'
          ]);
          Venta::create([
            'id_cliente' => 3,
            'nit' => '34857DF74',
            'id_producto' => 4,
            'cantidad' => 6,

            'observacion' => 'NINGUNA'
          ]);
    }
}
