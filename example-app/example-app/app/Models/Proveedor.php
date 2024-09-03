<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores'; // Asegúrate de que esto coincide con el nombre de la tabla

    protected $primaryKey = 'ProveedorID';

    protected $fillable = [
        'Nombre',
        'Contacto',
        'Telefono',
        'Email',
        'Direccion',
        'CategoriaID',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'CategoriaID');
    }
}
