<?php

namespace App\Http\Controllers;

use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();

        return response()->json(['pedidos' => $pedidos]);
    }

    public function getPedido(Int $id)
    {
        $pedido = Pedido::where('id', $id);

        return response()->json(['pedido', $pedido]);
    }
}