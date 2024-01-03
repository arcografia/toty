<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeguridadController;
use App\Http\Controllers\RentabilidadController;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/seguridad', [SeguridadController::class, 'mostrarVista'])
        ->name('seguridad.mostrarVista');

    Route::get('/grafica', [SeguridadController::class, 'mostrarVista'])
        ->name('grafica.mostrarVista');

    Route::post('/procesar-archivo', [SeguridadController::class, 'procesarArchivo'])
        ->name('seguridad.procesarArchivo');

    // Nueva ruta para rentabilidades
    Route::get('/rentabilidad', [RentabilidadController::class, 'mostrarVista'])
        ->name('rentabilidad.mostrarVista');

    // Ruta para obtener rentabilidades
    Route::get('/api/rentabilidades', [RentabilidadController::class, 'obtenerRentabilidades'])
        ->name('api.rentabilidades');
});
