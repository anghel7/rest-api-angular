<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
  protected $table = 'ventas';
  protected $primaryKey = 'id_venta';
  protected $hidden = ['created_at', 'updated_at', 'deleted'];
  protected $fillable = ['id_producto', 'id_cliente', 'total', 'fecha', 'deleted'];
}
