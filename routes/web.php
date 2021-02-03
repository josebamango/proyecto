<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApuestaController;
use App\Http\Controllers\InicioController;
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

Route::get('wachete', [ApuestaController::class, "index"])->name("wachete.index");

Route::get('wachete/crear', [ApuestaController::class, "create"])->name("wachete.create");

Route::get('wachete/{apuesta}', [ApuestaController::class,"show"])->name("wachete.show");

Route::post('wachete/store', [ApuestaController::class, "store"])->name("wachete.store");

Route::get('wachete/{apuesta}/editar',[ApuestaController::class, "edit"])->name("wachete.edit");

Route::put('wachete/{apuesta}', [ApuestaController::class, 'update'])->name("wachete.update");

