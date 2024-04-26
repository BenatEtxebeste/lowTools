<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Log;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();

        return response()->json(['productos' => $productos]);
    }

    public function getProducto(Request $request)
    {
        $id = $request->id;

        $producto = Producto::find($id);

        return response()->json($producto);
    }

    public function indexByCategoria(Request $request)
    {
        $categoria = $request->categoria;
        $nombre = $request->nombre;

        $productos = Producto::where('categoria', $categoria)
                            ->where('nombre', $nombre)
                            ->get();
        return response()->json(['productos' => $productos]);
    }

    public function deleteProducto(Request $request)
    {
        $id = $request->id;

        $producto = Producto::where('id', $id)->delete();

        return "Producto con el id: " . $id . " borrado correctamente";
    }

    public function saveProducto(Request $request)
    {   
        $id = $request->id;
        $nombre = $request->nombre;
        $precio = $request->precio;
        $album = $request->album;
        $categoria = $request->categoria;

        Producto::updateOrCreate(
        [
            'id' => $id
        ],
        [
            'nombre' => $nombre,
            'precio' => $precio,
            'album' => $album,
            'categoria' => $categoria
        ]);

        if (isset($id)) {
            return "Producto con el id: " . $id . " actualizado correctamente";
        } else {
            return "Producto insertado correctamente";
        }
    }
}