@extends('layouts.app')

@section('content')
<div class="card">
    <h2>NT3 - Vistas y Blade Templates</h2>

    <p>
        Blade es el motor de plantillas de Laravel. Permite crear vistas dinámicas,
        reutilizar estructuras y escribir código PHP de manera más limpia dentro del HTML.
    </p>

    <h3>Directivas principales</h3>

<pre><code>@verbatim
@if($titulo)
    Bienvenido
@endif

@foreach($productos as $producto)
    {{ $producto->nombre }}
@endforeach

@extends('layouts.app')

@section('content')
    Contenido de la página
@endsection

@yield('content')
@endverbatim</code></pre>

    <h3>Ejemplo de layout</h3>

<pre><code>@verbatim
<html>
<body>
    <nav style="background-color: #747264; color: white; padding: 10px;">Menú principal</nav>

    @yield('content')
</body>
</html>
@endverbatim</code></pre>

    <h3>Paso de variables desde controlador a vista</h3>

<pre><code>@verbatim
public function index()
{
    $titulo = 'Guía Laravel';

    return view('home', compact('titulo'));
}
@endverbatim</code></pre>

    <h3>Resultado en la vista</h3>

<pre><code>@verbatim
<h1>{{ $titulo }}</h1>
@endverbatim</code></pre>

    <h3>CSS y JavaScript en Laravel</h3>

    <p>
        Laravel permite integrar CSS y JavaScript mediante archivos en la carpeta public
        o mediante herramientas modernas como Vite.
    </p>
</div>
@endsection