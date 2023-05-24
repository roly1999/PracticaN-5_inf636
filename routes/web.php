<?php

use App\Http\Controllers\CalculosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('fibonacci', function () {
    return view('vistaFibonacci');
})->name('fibonacci');

Route::post('obtenerFibonacci', [CalculosController::class, 'calcularFibonacci'])->name('obtenerFibonacci');

Route::get('palabras', function () {
    return view('vistaPalabras');
})->name('palabras');

Route::post('obtenerPalabras', [CalculosController::class, 'calcularPalabras'])->name('obtenerPalabras');

Route::get('vocales', function () {
    return view('vistaVocales');
})->name('vocales');

Route::post('obtenerVocales', [CalculosController::class, 'calcularVocales'])->name('obtenerVocales');

Route::get('numPerfecto', function () {
    return view('vistaNumPerfecto');
})->name('numPerfecto');

Route::post('obtenerNumPerfecto', [CalculosController::class, 'calcularNumPerfecto'])->name('obtenerNumPerfecto');
