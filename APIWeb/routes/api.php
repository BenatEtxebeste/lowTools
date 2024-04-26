<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:api')->group(function () {  
    Route::get('logout', [RegisterController::class, 'logout']);
});

//Producto
Route::get('index', [ProductoController::class, 'index']);
Route::get('getProducto', [ProductoController::class, 'getProducto']);
Route::get('filtradoProductos', [ProductoController::class, 'indexByCategoria']);

Route::post('deleteProducto', [ProductoController::class, 'deleteProducto']);

Route::post('insertProducto', [ProductoController::class, 'insertProducto']);