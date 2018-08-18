<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table = 'productos';
  protected $primaryKey = 'id_producto';
  protected $hidden = ['created_at', 'updated_at', 'deleted'];
  protected $fillable = ['nombre', 'precio', 'stock', 'cantidad', 'marca', 'image_url', 'deleted'];
}
