<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
  public function getAll()
  {
    $cliente = Cliente::orderBy('id_cliente')->get();
    return response()->json($cliente);
  }

  public function getById($id)
  {
    $cliente = Cliente::find($id);
    return response()->json($cliente);
  }

  public function create(Request $request)
  {
    $cliente = Cliente::create($request->all());
    return response()->json($cliente);
  }

  public function edit($id, Request $request)
  {
    $cliente = Cliente::find($id);
    $cliente->update($request->all());
    return response()->json($cliente);
  }

  public function delete($id)
  {
    $cliente = Cliente::find($id);
    $cliente->delete();
    return response()->json($cliente);
  }
}
