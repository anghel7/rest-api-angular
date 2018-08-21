<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
  public function getAll()
  {
    $productos = Producto::orderBy('id_producto')->get();
    return response()->json($productos);
  }

  public function getById($id)
  {
  }

  public function create(Request $request)
  {
  }

  public function edit($id, Request $request)
  {
  }

  public function delete($id)
  {
  }
}
