<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function getPedidos()
    {
        $pedidos = Pedido::all();

        return response()->json(['pedidos' => $pedidos]);
    }

    public function getPedido(Request $request)
    {
        $id = $request->id;

        $pedido = Pedido::find($id);

        return response()->json($pedido);
    }

    public function savePedido(Request $request)
    {   
        $id = $request->id;
        $idUsu = $request->idUsu;
        $idProd = $request->idProd;
        $inserted_at = $request->inserted_at;
        $updated_at = $request->updated_at;

        Pedido::updateOrCreate(
        [
            'id' => $id
        ],
        [
            'idUsu' => $idUsu,
            'idProd' => $idProd,
            'inserted_at' => $inserted_at,
            'updated_at' => $updated_at
        ]);

        if (isset($id)) {
            return "Pedido con el id: " . $id . " actualizado correctamente";
        } else {
            return "Pedido realizado correctamente";
        }
    }
}