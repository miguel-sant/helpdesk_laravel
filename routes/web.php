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

/* Login */
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login.index');

/* Dashboard */
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/usuarios', [\App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios.index');

Route::get('/historico', [\App\Http\Controllers\HistoricoController::class, 'index'])->name('historico.index');

Route::get('/sistemas', [\App\Http\Controllers\SistemasController::class, 'index'])->name('sistemas.index');
