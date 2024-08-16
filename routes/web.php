<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'home'])->name('home');
Route::get('/servicios', [WelcomeController::class, 'servicios'])->name('servicios');
Route::get('/proyectos', [WelcomeController::class, 'proyectos'])->name('proyectos');
Route::get('/blog', [WelcomeController::class, 'blog'])->name('blog');
Route::get('/contacto', [WelcomeController::class, 'contacto'])->name('contacto');

// Rutas para clientes con CRUD
Route::resource('clientes', ClientesController::class);

