<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Producto::create([
      'nombre' => 'Detergente',
      'precio' => 8,
      'stock' => 60,
      'cantidad' => 10,
      'marca' => 'Patito',
      'image_url' => 'http://cursoangular.hosting.cs.umss.edu.bo/images/producto/detergente.jpg'
    ]);
    Producto::create([
      'nombre' => 'Sardina',
      'precio' => 12,
      'stock' => 20,
      'cantidad' => 50,
      'marca' => 'Lidita',
      'image_url' => 'http://cursoangular.hosting.cs.umss.edu.bo/images/producto/sardina.jpg'
    ]);
    Producto::create([
      'nombre' => 'Fideo',
      'precio' => 4,
      'stock' => 22,
      'cantidad' => 55,
      'marca' => 'Famosa',
      'image_url' => 'http://cursoangular.hosting.cs.umss.edu.bo/images/producto/fideo.jpg'
    ]);
    Producto::create([
      'nombre' => 'Leche',
      'precio' => 6,
      'stock' => 15,
      'cantidad' => 20,
      'marca' => 'Pil',
      'image_url' => 'http://cursoangular.hosting.cs.umss.edu.bo/images/producto/leche.jpg'
    ]);
    Producto::create([
      'nombre' => 'Mayonesa',
      'precio' => 2,
      'stock' => 13,
      'cantidad' => 63,
      'marca' => 'Kris',
      'image_url' => 'http://cursoangular.hosting.cs.umss.edu.bo/images/producto/mayonesa.jpg'
    ]);
    Producto::create([
      'nombre' => 'Arroz',
      'precio' => 7,
      'stock' => 25,
      'cantidad' => 34,
      'marca' => 'Okinawa',
      'image_url' => 'http://cursoangular.hosting.cs.umss.edu.bo/images/producto/arroz.jpg'
    ]);
  }
}
