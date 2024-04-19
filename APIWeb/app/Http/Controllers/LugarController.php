<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;

class LugarController extends Controller
{
    public function index()
    {
        $lugares = Lugar::all();

        return response()->json(['lugares' => $lugares]);
    }
}