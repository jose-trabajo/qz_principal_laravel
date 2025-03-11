<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('extra', function () {
    return view('welcome');
});

Route::get('/dos', [PaginaController::class, 'dos'])->name('dos-2');
Route::get('/', [PaginaController::class, 'uno'])->name('uno-1');
Route::get('/inicio', [PaginaController::class, 'inicio'])->name('iniciouno');
Route::get('/acerca', [PaginaController::class, 'acerca'])->name('acerca');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');