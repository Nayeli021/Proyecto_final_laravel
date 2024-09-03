@extends('body.cuerpo')

@section('title', 'Editar Proveedor')

@section('content')
<div class="container">
    <h1>Editar Proveedor</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('proveedores.update', $proveedor->ProveedorID) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre', $proveedor->Nombre) }}" required>
        </div>

        <div class="form-group">
            <label for="Contacto">Contacto</label>
            <input type="text" name="Contacto" id="Contacto" class="form-control" value="{{ old('Contacto', $proveedor->Contacto) }}" required>
        </div>

        <div class="form-group">
            <label for="Telefono">Teléfono</label>
            <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{ old('Telefono', $proveedor->Telefono) }}" required>
        </div>

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" class="form-control" value="{{ old('Email', $proveedor->Email) }}">
        </div>

        <div class="form-group">
            <label for="Direccion">Dirección</label>
            <textarea name="Direccion" id="Direccion" class="form-control">{{ old('Direccion', $proveedor->Direccion) }}</textarea>
        </div>

        <div class="form-group">
            <label for="CategoriaID">Categoría</label>
            <select name="CategoriaID" id="CategoriaID" class="form-control" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $categoria->id == $proveedor->CategoriaID ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Proveedor</button>
    </form>
</div>

@endsection
