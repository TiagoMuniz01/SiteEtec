<?php

use App\Http\Controllers\ControllerPrincipal;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerPrincipal::class, 'Home'])->name('');
/*Route::get('/', [ControllerPrincipal::class, ''])->name(''); 
Route::get('/', [ControllerPrincipal::class, ''])->name(''); 
Route::get('/', [ControllerPrincipal::class, ''])->name(''); 
Route::get('/', [ControllerPrincipal::class, ''])->name(''); */