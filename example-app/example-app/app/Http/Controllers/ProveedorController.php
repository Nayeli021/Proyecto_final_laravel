<?php

namespace App\Http\Controllers;


use App\Models\Proveedor;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    // Mostrar una lista de todos los proveedores
    public function index()
    {
        $proveedores = Proveedor::with('categoria')->get(); // Obtiene proveedores con la relación de categorías
        return view('proveedor.index', compact('proveedores'));
    }

    // Mostrar el formulario para crear un nuevo proveedor
    public function create()
    {
        $categorias = Categoria::all(); // Obtén todas las categorías para el dropdown
        return view('proveedor.create', compact('categorias'));
    }

    // Almacenar un nuevo proveedor
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Contacto' => 'nullable|string|max:255',
            'Telefono' => 'nullable|string|max:20',
            'Email' => 'nullable|email|max:255',
            'Direccion' => 'nullable|string',
            'CategoriaID' => 'required|exists:categorias,id', // Asegúrate de que la categoría exista
        ]);

        // Crear un nuevo proveedor
        Proveedor::create($request->all());

        // Redirigir con éxito
        return redirect()->route('proveedores.index')->with('success', 'Proveedor creado exitosamente.');
    }

    // Mostrar el formulario para editar un proveedor
    public function edit(Proveedor $proveedor)
    {
        $categorias = Categoria::all(); // Obtén todas las categorías para el dropdown
        return view('proveedor.edit', compact('proveedor', 'categorias'));
    }

    // Actualizar un proveedor existente
    public function update(Request $request, Proveedor $proveedor)
    {
        // Validar los datos recibidos
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Contacto' => 'nullable|string|max:255',
            'Telefono' => 'nullable|string|max:20',
            'Email' => 'nullable|email|max:255',
            'Direccion' => 'nullable|string',
            'CategoriaID' => 'required|exists:categorias,id', // Asegúrate de que la categoría exista
        ]);

        // Actualizar el proveedor
        $proveedor->update($request->all());

        // Redirigir con éxito
        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado exitosamente.');
    }

    // Eliminar un proveedor existente
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();

        // Redirigir con éxito
        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado exitosamente.');
    }
}