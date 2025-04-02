<?php

use App\Http\Controllers\ControllerPrincipal;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerPrincipal::class, 'home'])->name('');
/*Route::get('/', [ControllerPrincipal::class, ''])->name(''); 
Route::get('/', [ControllerPrincipal::class, ''])->name(''); 
Route::get('/', [ControllerPrincipal::class, ''])->name(''); 
Route::get('/', [ControllerPrincipal::class, ''])->name(''); */