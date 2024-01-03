<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rentabilidad extends Model
{
    use HasFactory;

    protected $table = 'rentabilidades'; // Ajusta el nombre de la tabla según tu base de datos

    protected $fillable = ['fecha', 'valor', 'usuario_id'];

    public $timestamps = false; // Desactiva las marcas de tiempo

    // Puedes definir relaciones u otros métodos aquí si es necesario

    // Ejemplo de relación con el modelo User
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
