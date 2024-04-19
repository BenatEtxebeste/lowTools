<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();

        return response()->json(['productos' => $productos]);
    }

    public function indexByCategoria(String $categoria, String $name)
    {
        $productos = Producto::where('categoria', $categoria)
                            ->where('name', $name)
                            ->get();
        return response()->json(['productos' => $productos]);
    }
}