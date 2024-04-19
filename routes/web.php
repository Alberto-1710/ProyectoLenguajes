<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'prueba'])->name("welcome.home");
Route::get('/carrito', [HomeController::class, 'carrito'])->name("carrito.home");
Route::get('/factura', [HomeController::class, 'factura'])->name("factura.home");
Route::get('/login', [HomeController::class, 'login'])->name("login.home");
Route::get('/pago', [HomeController::class, 'realizarPago'])->name("pago.home");
Route::get('/reportes', [HomeController::class, 'reportes'])->name("reportes.home");

?>