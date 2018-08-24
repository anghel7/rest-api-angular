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
    $producto = Producto::find($id);
    return response()->json($producto);
  }

  public function create(Request $request)
  {
    $producto = Producto::create($request->all());
    return response()->json($producto);
  }

  public function edit($id, Request $request)
  {
    $producto = Producto::find($id);
    $producto->update($request->all());
    return response()->json($producto);
  }

  public function delete($id)
  {
    $producto = Producto::find($id);
    $producto->delete();
    return response()->json($producto);
  }
}
