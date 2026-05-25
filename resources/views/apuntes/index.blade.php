@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Apuntes Laravel</h2>

    <p>
        Esta sección demuestra el uso de modelos, relaciones, consultas Eloquent,
        formularios, validaciones y persistencia real en base de datos.
    </p>

    <a href="{{ route('apuntes.create') }}" class="btn">Crear nuevo apunte</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Núcleo</th>
            <th>Título</th>
            <th>Acciones</th>
        </tr>

        @forelse($apuntes as $apunte)
            <tr>
                <td>{{ $apunte->id }}</td>
                <td>{{ $apunte->nucleo->nombre }}</td>
                <td>{{ $apunte->titulo }}</td>
                <td>
                    <a href="{{ route('apuntes.show', $apunte) }}" class="btn">Ver</a>
                    <a href="{{ route('apuntes.edit', $apunte) }}" class="btn">Editar</a>

                    <form action="{{ route('apuntes.destroy', $apunte) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('¿Desea eliminar este apunte?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No existen apuntes registrados.</td>
            </tr>
        @endforelse
    </table>
</div>
@endsection