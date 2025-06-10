<?php

use App\Http\Controllers\ControllerPrincipal;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerPrincipal::class, 'home'])->name('home');
Route::get('/Cursos', [ControllerPrincipal::class, 'cursos'])->name('cursos'); 
Route::get('/Departamento', [ControllerPrincipal::class, 'departamento'])->name('departamento'); 
Route::get('/Contato', [ControllerPrincipal::class, 'contato'])->name('contato');
//Formulário para mandar os emails
Route::get('/emails', [ContatoController::class, 'emails'])->name('emails');
Route::get('/create', [ContatoController::class, 'create'])->name('create');
Route::post('/store-emails', [ContatoController::class, 'store'])->name('store');

