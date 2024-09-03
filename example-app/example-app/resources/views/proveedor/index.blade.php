@extends('body.cuerpo') <!-- Asegúrate de que 'body.cuerpo' apunta al archivo correcto -->

@section('title', 'Lista de Proveedores')

@section('content')
@include('partials.navbar')
<div class="container">
    <h1>Proveedores</h1>
    <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Nuevo Proveedor</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Contacto</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->ProveedorID }}</td>
                <td>{{ $proveedor->Nombre }}</td>
                <td>{{ $proveedor->Contacto }}</td>
                <td>{{ $proveedor->Telefono }}</td>
                <td>{{ $proveedor->Email }}</td>
                <td>{{ $proveedor->Direccion }}</td>
                <td>{{ $proveedor->categoria->nombre }}</td> <!-- Relación con categoría -->
                <td>
                    <a href="{{ route('proveedores.edit', $proveedor->ProveedorID) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('proveedores.destroy', $proveedor->ProveedorID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
