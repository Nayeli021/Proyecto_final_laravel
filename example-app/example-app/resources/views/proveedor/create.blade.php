@extends('body.cuerpo') <!-- Asegúrate de que 'body.cuerpo' apunta al archivo correcto -->

@section('title', 'Registrar Proveedor') <!-- Opcionalmente, puedes agregar un título -->

@section('content') <!-- Cambiado de 'cuerpo' a 'content' -->
@include('partials.navbar')

<div class="container">
    <h1>Crear Proveedor</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre') }}" required>
        </div>

        <div class="form-group">
            <label for="Contacto">Contacto</label>
            <input type="text" name="Contacto" id="Contacto" class="form-control" value="{{ old('Contacto') }}" required>
        </div>

        <div class="form-group">
            <label for="Telefono">Teléfono</label>
            <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{ old('Telefono') }}" required>
        </div>

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" class="form-control" value="{{ old('Email') }}">
        </div>

        <div class="form-group">
            <label for="Direccion">Dirección</label>
            <textarea name="Direccion" id="Direccion" class="form-control">{{ old('Direccion') }}</textarea>
        </div>

        <div class="form-group">
            <label for="CategoriaID">Categoría</label>
            <select name="CategoriaID" id="CategoriaID" class="form-control" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Proveedor</button>
    </form>
</div>

@endsection
