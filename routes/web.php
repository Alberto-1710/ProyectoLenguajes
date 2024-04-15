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
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/home', [HomeController::class, 'prueba'])->name("welcome.home");
=======
Route::get('/home/{nombre}', [HomeController::class, 'home'])->name("welcome.home");



//Hola Este cambio lo hizo David 
>>>>>>> 0eb2a51110001cb8edd691897893e1df14209f81
