<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntrenamientosController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*Vistas*/

Route::get("entrenamientos",[EntrenamientosController::class, "index"])
    ->name("entrenamientos");

Route::get("inicio",[InicioController::class, "index"])->name("inicio");

Route::get("ofertas",[OfertasController::class, "index"])->name("ofertas");

/*Vistas para trabajadores*/
Route::get('/cliente', [ClienteController::class, 'show'])->name('Cliente.show');

Route::get('/sesiones', [ClienteController::class, 'show'])->name('sesiones');


Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
