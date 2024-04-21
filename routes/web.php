<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarritoController;
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

//Route::get('/home/{nombre}', [HomeController::class, 'saludo'])->name("welcome.home");
Route::post('/inicio', [HomeController::class, 'crearUsuario'])->name("usuario.home");

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/crearUsuario', function(){
    return view('crearUsuario');
})->name("crear.home");

Route::get('/carrito', function(){
    return view('carrito');
})->name("carrito.home");

Route::get('/ver', function(){
    return view('agregarProductoVendedor');
})->name("agregar.producto");;

Route::get('/tipo', function(){
    return view('tipousuario');
})->name("tipousuario.home");;

Route::get('/admin', function(){
    return view("vistaAdministrador");
})->name("admin.home");

Route::get('/factura', [HomeController::class, 'factura'])->name("factura.home");
Route::get('/login', [HomeController::class, 'login'])->name("login.home");
Route::post('/validar', [HomeController::class, 'validarUsuario'])->name("validar.home");
Route::get('/pago', [HomeController::class, 'realizarPago'])->name("pago.home");
Route::get('/reportes', [HomeController::class, 'reportes'])->name("reportes.home");

Route::get('/cart', [CarritoController::class, 'agregar'])->name('carrito.index');
Route::post('/cart/add', 'CartController@addToCart')->name('cart.addToCart');
Route::post('/cart/remove', 'CartController@removeFromCart')->name('cart.removeFromCart');
Route::post('/cart/update', 'CartController@updateCart')->name('cart.updateCart');

?>