@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Crear apunte</h2>

    <p>
        Complete el formulario para registrar un nuevo apunte asociado a uno de los núcleos temáticos.
        Este ejemplo demuestra el uso de formularios, validación y almacenamiento en la base de datos.
    </p>

    <form method="POST" action="{{ route('apuntes.store') }}">
        @csrf

        <div class="form-group">
            <label for="nucleo_id">Núcleo temático</label>

            <select name="nucleo_id" id="nucleo_id" required>
                <option value="" disabled {{ old('nucleo_id') ? '' : 'selected' }} hidden>
                    Seleccione un núcleo temático
                </option>

                @foreach($nucleos as $nucleo)
                    <option value="{{ $nucleo->id }}" {{ old('nucleo_id') == $nucleo->id ? 'selected' : '' }}>
                        {{ $nucleo->nombre }}
                    </option>
                @endforeach
            </select>

            @error('nucleo_id')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="titulo">Título del apunte</label>

            <input
                type="text"
                name="titulo"
                id="titulo"
                value="{{ old('titulo') }}"
                placeholder="Ejemplo: Introducción a las rutas en Laravel"
            >

            @error('titulo')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="contenido">Contenido del apunte</label>

            <textarea
                name="contenido"
                id="contenido"
                rows="6"
                placeholder="Escriba aquí la explicación del apunte..."
            >{{ old('contenido') }}</textarea>

            @error('contenido')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="codigo_ejemplo">Código de ejemplo</label>

            <textarea
                name="codigo_ejemplo"
                id="codigo_ejemplo"
                rows="6"
                placeholder="Ejemplo: Route::get('/inicio', [HomeController::class, 'index']);"
            >{{ old('codigo_ejemplo') }}</textarea>

            @error('codigo_ejemplo')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">Guardar apunte</button>

            <a href="{{ route('apuntes.index') }}" class="btn btn-secondary">
                Volver al listado
            </a>
        </div>
    </form>
</div>
@endsection