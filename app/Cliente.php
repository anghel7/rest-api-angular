<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  protected $table = 'clientes';
  protected $primaryKey = 'id_cliente';
  protected $hidden = ['created_at', 'updated_at', 'deleted'];
  protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'image_url','deleted'];
}
