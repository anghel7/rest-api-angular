<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Cliente::create([
        'nombre' => 'Juan',
        'apellido_paterno' => 'Perez',
        'apellido_materno' => 'Lopez',
        'image_url' => 'http://cursoangular.hosting.cs.umss.edu.bo/images/cliente/juan.jpg'
      ]);
      Cliente::create([
        'nombre' => 'Ester Mariso',
        'apellido_paterno' => 'Gomez',
        'apellido_materno' => 'Aramayo',
        'image_url' => 'http://cursoangular.hosting.cs.umss.edu.bo/images/cliente/ester.jpg'
      ]);
      Cliente::create([
        'nombre' => 'Sara',
        'apellido_paterno' => 'Noguera',
        'apellido_materno' => 'Rios',
        'image_url' => 'http://cursoangular.hosting.cs.umss.edu.bo/images/cliente/sara.jpg'
      ]);
      Cliente::create([
        'nombre' => 'Ricardo',
        'apellido_paterno' => 'Almazan',
        'apellido_materno' => 'Galindo',
        'image_url' => 'http://cursoangular.hosting.cs.umss.edu.bo/images/cliente/ricardo.jpg'
      ]);
      Cliente::create([
        'nombre' => 'Miguel',
        'apellido_paterno' => 'Alba',
        'apellido_materno' => 'Aldunate',
        'image_url' => 'http://cursoangular.hosting.cs.umss.edu.bo/images/cliente/miguel.jpg'
      ]);
    }
}
