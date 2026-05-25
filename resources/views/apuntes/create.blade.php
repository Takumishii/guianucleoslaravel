@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Crear apunte</h2>

    <form method="POST" action="{{ route('apuntes.store') }}">
        @csrf

        <label for="nucleo_id">Núcleo temático</label>
        <select name="nucleo_id" id="nucleo_id">
            <option value="">Seleccione un núcleo</option>
            @foreach($nucleos as $nucleo)
                <option value="{{ $nucleo->id }}" {{ old('nucleo_id') == $nucleo->id ? 'selected' : '' }}>
                    {{ $nucleo->nombre }}
                </option>
            @endforeach
        </select>
        @error('nucleo_id')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}">
        @error('titulo')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="contenido">Contenido</label>
        <textarea name="contenido" id="contenido" rows="6">{{ old('contenido') }}</textarea>
        @error('contenido')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="codigo_ejemplo">Código de ejemplo</label>
        <textarea name="codigo_ejemplo" id="codigo_ejemplo" rows="6">{{ old('codigo_ejemplo') }}</textarea>
        @error('codigo_ejemplo')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn">Guardar apunte</button>
    </form>
</div>
@endsection