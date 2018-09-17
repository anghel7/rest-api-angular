<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
  protected $table = 'ventas';
  protected $primaryKey = 'id_venta';
  protected $hidden = ['created_at', 'updated_at', 'deleted'];
  protected $fillable = ['id_producto', 'id_cliente', 'nit', 'cantidad', 'observacion', 'deleted'];

  public function cliente(){
    return $this->belongsTo('App\Cliente', 'id_cliente');
  }

  public function producto(){
    return $this->belongsTo('App\Producto', 'id_producto');
  }
}
