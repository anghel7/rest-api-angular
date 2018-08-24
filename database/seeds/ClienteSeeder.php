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
      $local_path = 'http://localhost:8000';
      $development_path = 'http://cursoangular.hosting.cs.umss.edu.bo';
      $path = $local_path;
      Cliente::create([
        'nombre' => 'Juan',
        'apellido_paterno' => 'Perez',
        'apellido_materno' => 'Lopez',
        'image_url' => $path.'/images/cliente/juan.jpg'
      ]);
      Cliente::create([
        'nombre' => 'Ester Mariso',
        'apellido_paterno' => 'Gomez',
        'apellido_materno' => 'Aramayo',
        'image_url' => $path.'/images/cliente/ester.jpg'
      ]);
      Cliente::create([
        'nombre' => 'Sara',
        'apellido_paterno' => 'Noguera',
        'apellido_materno' => 'Rios',
        'image_url' => $path.'/images/cliente/sara.jpg'
      ]);
      Cliente::create([
        'nombre' => 'Ricardo',
        'apellido_paterno' => 'Almazan',
        'apellido_materno' => 'Galindo',
        'image_url' => $path.'/images/cliente/ricardo.jpg'
      ]);
      Cliente::create([
        'nombre' => 'Miguel',
        'apellido_paterno' => 'Alba',
        'apellido_materno' => 'Aldunate',
        'image_url' => $path.'/images/cliente/miguel.jpg'
      ]);
    }
}
