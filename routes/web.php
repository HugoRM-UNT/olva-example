<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcercaController;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');


Route::get('/acercade', [AcercaController::class,'acercade'])->name('acercade');