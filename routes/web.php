<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Acid-base', [App\Http\Controllers\praticalController::class, 'acid_base'])->name('acid_base');

Route::get('/Concentration', [App\Http\Controllers\praticalController::class, 'concentration'])->name('concentration');

Route::get('/ph_scale', [App\Http\Controllers\praticalController::class, 'ph_scale'])->name('ph');

Route::get('/Balancing-chemical-equation', [App\Http\Controllers\praticalController::class, 'chemical_eqn'])->name('chem_eqn');

Route::get('/Build-an-atom', [App\Http\Controllers\praticalController::class, 'build_an_atom'])->name('atom');

Route::get('/Build-a-molecule', [App\Http\Controllers\praticalController::class, 'build_a_molecule'])->name('molecule');




