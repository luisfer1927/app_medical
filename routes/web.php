<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PacienteController;

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
    return view('home');
})->middleware('auth');

Route::get('/registro', [RegistroController::class, 'create'])
    ->middleware('guest')
    ->name('registro.index');

Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');
Route::post('/login', [LoginController::class, 'store'])
->name('login.store');

Route::get('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


//Enrutar con categoria
Route::get('/', [PacienteController::class, 'index'])
->middleware('auth')
    ->name('login.destroy');

Route::get('/paciente/crear', [PacienteController::class, 'create']);

Route::post('/paciente/guardar', [PacienteController::class, 'store']);

Route::get('/paciente/editar/{id}', [PacienteController::class, 'edit']);

Route::put('/paciente/actualizar/{id}', [PacienteController::class, 'update']);

Route::delete('/paciente/eliminar/{paciente}', [PacienteController::class, 'destroy']);
    

