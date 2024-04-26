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

    public function indexByCategoria(String $categoria, String $name)
    {
        $productos = Producto::where('categoria', $categoria)
                            ->where('name', $name)
                            ->get();
        return response()->json(['productos' => $productos]);
    }

    public function deleteProducto(Request $request)
    {
        $id = $request->id;

        $producto = Producto::where('id', $id)->delete();

        return response()->json(['productos', $producto]);
    }

    public function insertProducto(Request $request)
    {
        $producto = new Producto;

        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->album = $request->album;
        $producto->categoria = $request->categoria;

        $producto->save();

        return redirect('/getProductos');
    }
}