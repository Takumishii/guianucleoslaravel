@extends('layouts.app')

@section('content')
<div class="card">
    <h2>{{ $apunte->titulo }}</h2>

    <p><strong>Núcleo:</strong> {{ $apunte->nucleo->nombre }}</p>

    <h3>Contenido</h3>
    <p>{{ $apunte->contenido }}</p>

    @if($apunte->codigo_ejemplo)
        <h3>Código de ejemplo</h3>
        <pre><code>{{ $apunte->codigo_ejemplo }}</code></pre>
    @endif

    <a href="{{ route('apuntes.index') }}" class="btn">Volver</a>
</div>
@endsection