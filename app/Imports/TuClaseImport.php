<?php
// app/Imports/TuClaseImport.php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Rentabilidad;

class TuClaseImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Aquí debes mapear los datos de la fila a tu modelo Rentabilidad
        return new Rentabilidad([
            'fecha' => $row['fecha'],
            'valor' => $row['valor'],
            // Agrega más campos según sea necesario
        ]);
    }
}
