<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Rentabilidad;
use Illuminate\Support\Facades\Auth;

class RentabilidadController extends Controller
{
    public function mostrarVista()
    {
        // Obtén el ID del usuario autenticado
        $usuarioId = Auth::id();

        // Obtén los datos de rentabilidad solo para el usuario autenticado
        $datosRentabilidad = Rentabilidad::where('usuario_id', $usuarioId)->get();

        return Inertia::render('Rentabilidad', [
            'datosRentabilidad' => $datosRentabilidad,
        ]);
    }

    public function obtenerRentabilidades()
    {
        try {
            // Obtén el ID del usuario autenticado
            $usuarioId = Auth::id();

            // Obtén las rentabilidades del usuario logueado
            $rentabilidades = Rentabilidad::where('usuario_id', $usuarioId)->get();

            // Log de depuración
            \Illuminate\Support\Facades\Log::info('Rentabilidades obtenidas con éxito:', $rentabilidades->toArray());

            return response()->json($rentabilidades);
        } catch (\Exception $e) {
            // Log de errores
            \Illuminate\Support\Facades\Log::error('Error al obtener rentabilidades:', ['exception' => $e]);

            return response()->json(['error' => 'Error al obtener rentabilidades'], 500);
        }
    }

    // Puedes agregar más métodos según sea necesario para manejar otras operaciones relacionadas con la rentabilidad
}
