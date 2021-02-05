<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApuestaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\RetoController;


Route::get('/', [InicioController::class, "home"])->name("wachete.home");

Route::get('apuestas', [ApuestaController::class, "index"])->name("apuestas.index");

Route::get('retos', [RetoController::class, "index"])->name("retos.index");

Route::get('wachete/crear', [RetoController::class, "create"])->name("retos.create");

//Route::get('wachete/{apuesta}', [ApuestaController::class,"show"])->name("re.show");

Route::post('retos/store', [RetoController::class, "store"])->name("retos.store");

Route::get('retos/{reto}/editar',[RetoController::class, "edit"])->name("retos.edit");

Route::put('retos/{reto}', [RetoController::class, 'update'])->name("retos.update");

Route::get('apuestas/futbol', [ApuestaController::class, 'futbol'])->name("apuestas.futbol");

Route::get('apuestas/baloncesto', [ApuestaController::class, 'baloncesto'])->name("apuestas.baloncesto");

Route::delete('reto/{reto}/eliminar', [RetoController::class, 'destroy'])->name("retos.destroy");


