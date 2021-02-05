<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApuestaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\RetoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [InicioController::class, "home"])->name("wachete.home");

Route::get('apuestas', [ApuestaController::class, "index"])->name("apuestas.index");

Route::get('retos', [RetoController::class, "index"])->name("retos.index");

Route::get('wachete/crear', [RetoController::class, "create"])->name("retos.create");

//Route::get('wachete/{apuesta}', [ApuestaController::class,"show"])->name("re.show");

Route::post('retos/store', [RetoController::class, "store"])->name("retos.store");

Route::get('reto/{reto}/editar',[RetoController::class, "edit"])->name("retos.edit");

Route::put('wachete/{apuesta}', [ApuestaController::class, 'update'])->name("retos.update");

Route::get('apuestas/futbol', [ApuestaController::class, 'futbol'])->name("apuestas.futbol");

Route::get('apuestas/baloncesto', [ApuestaController::class, 'baloncesto'])->name("apuestas.baloncesto");


