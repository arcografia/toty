<?php

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\RentabilidadesExport;
use App\Http\Controllers\Application;

class UploadExcelController extends Controller
{
    public function __construct(
        Application $app
    ) {
        $this->app = $app;
    }

    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $file = $request->file('excel');
            $file->openFile('r');

            $this->validate($request, [
                'excel' => 'required|file|mimes:xls,xlsx',
            ]);

            if ($file->isFile() && $file->isValid()) {
                $data = Excel::load($file, 'UTF-8')->get();

                // Validar los datos del archivo Excel
                // ...

                // Subir el archivo al servidor
                $file->storeAs('uploads', $file->getClientOriginalName());

                // Procesar los datos del archivo Excel
                $processDataResult = procesarArchivoExcel($data);

                // Redirigir a la página de confirmación
                if ($processDataResult) {
                    return redirect()->route('mis-datos')->with('success', 'El archivo se ha procesado correctamente.');
                } else {
                    return redirect()->route('upload-excel')->with('error', 'Ha ocurrido un error al procesar el archivo. Por favor, compruebe que el archivo esté en formato Excel y que los datos sean correctos.');
                }
            } else {
                return redirect()->route('upload-excel')->with('error', 'El archivo no se ha cargado correctamente.');
            }
        }

        return view('upload-excel');
    }

    public function isDeferred(): bool
    {
        return false;
    }

    public function register(): void
    {
        $this->app->singleton(UploadExcelController::class, function () {
            return new UploadExcelController();
        });
    }
}*/
