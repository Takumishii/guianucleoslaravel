@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Inicio</h2>
    <p>
        Este sitio web funciona como una guía didáctica de los cinco primeros núcleos temáticos
        del curso Desarrollo Web con Laravel. Incluye explicación teórica, bloques de código
        y ejemplos prácticos funcionales.
    </p>
</div>

<div class="grid">
    @foreach($nucleos as $nucleo)
        <div class="card">
            <h3>{{ $nucleo->nombre }}</h3>
            <p>{{ $nucleo->descripcion }}</p>
        </div>
    @endforeach
</div>
@endsection