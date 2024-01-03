<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TuClaseImport;
use App\Models\Rentabilidad;
use App\Models\User;
use Inertia\Inertia;

class SeguridadController extends Controller
{
    public function mostrarVista()
    {
        return Inertia::render('Seguridad');
    }

    public function procesarArchivo(Request $request)
    {
        $archivo = $request->file('archivo');

        try {
            \DB::beginTransaction();

            $datos = Excel::toArray(new TuClaseImport(), $archivo);

            // Agrega el código de log dentro del bucle de datos
            foreach ($datos as $fila) {
                foreach ($fila as $item) {
                    // Añade este log para verificar que estás obteniendo los datos correctamente
                    \Log::info('Datos del archivo:', $item);

                    $usuario = User::where('nickname', $item['usuario'])->first();

                    if ($usuario) {
                        Rentabilidad::updateOrCreate([
                            'fecha' => \Carbon\Carbon::parse($item['fecha'])->toDateString(),
                            'usuario_id' => $usuario->id,
                        ], [
                            'valor' => (int) $item['valor'],
                        ]);
                    }
                }
            }

            \DB::commit();

            return redirect()->back()->with('success', 'Datos actualizados correctamente');
        } catch (\Exception $e) {
            \DB::rollBack();

            // Devuelve una respuesta con el mensaje de error y la traza de la excepción
            return response()->json(['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()], 500);
        }
    }
}
