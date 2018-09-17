<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;

class VentaController extends Controller
{
  public function getAll()
  {
    $ventas = Venta::orderBy('id_venta')->get()->load('cliente','producto');
    return response()->json($ventas);
  }

  public function getById($id)
  {
    $venta = Venta::find($id);
    return response()->json($venta->load('cliente','producto'));
  }

  public function create(Request $request)
  {
    $venta = Venta::create($request->all());
    return response()->json($venta->load('cliente','producto'));
  }

  public function edit($id, Request $request)
  {
  }

  public function delete($id)
  {
  }
}
