<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApuestaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\RetoController;


Route::get('/', [InicioController::class, "home"])->name("wachete.home");

Route::get('apuestas', [ApuestaController::class, "index"])->name("apuestas.index");

Route::get('apuestas/baloncesto', [ApuestaController::class, 'baloncesto'])->name("apuestas.baloncesto");

Route::get('apuestas/futbol', [ApuestaController::class, 'futbol'])->name("apuestas.futbol");

Route::get('retos', [RetoController::class, "index"])->name("retos.index");

Route::get('retos/crear', [RetoController::class, "create"])->name("retos.create");

Route::post('retos/store', [RetoController::class, "store"])->name("retos.store");

Route::get('retos/{reto}/editar',[RetoController::class, "edit"])->name("retos.edit");

Route::get('retos/{reto}', [RetoController::class,"show"])->name("retos.show");

Route::put('retos/{reto}', [RetoController::class, 'update'])->name("retos.update");

Route::delete('reto/{reto}/eliminar', [RetoController::class, 'destroy'])->name("retos.destroy");



