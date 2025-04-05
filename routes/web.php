<?php

use App\Http\Controllers\ControllerPrincipal;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerPrincipal::class, 'home'])->name('home');
Route::get('/Cursos', [ControllerPrincipal::class, 'cursos'])->name('cursos'); 
Route::get('/Departamento', [ControllerPrincipal::class, 'departamento'])->name('departamento'); 
Route::get('/Contato', [ControllerPrincipal::class, 'contato'])->name('contato');
