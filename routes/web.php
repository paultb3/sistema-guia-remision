<?php

use App\Http\Controllers\GuiaRemisionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datosController;
use App\Models\GuiaRemision;

// creando una funcion de rutas de la vistas
Route::view('/', 'welcome')->name('welcome');
Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/datos', [datosController::class, 'create'])->name('datos.create');
Route::post('/dashboard', [datosController::class, 'store'])->name('datos.store');

Route::get('/guia', [GuiaRemisionController::class, 'create'])->name('guia.create');
Route::post('/guia', [GuiaRemisionController::class, 'store'])->name('guia.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::middleware(['auth'])->get('/users', [UserController::class, 'index'])->name('users.index');
});

require __DIR__ . '/auth.php';
