@extends('layouts.app')

@section('content')
<div class="card">
    <h2>NT2 - Rutas y Controladores</h2>

    <p>
        Las rutas permiten definir qué debe hacer Laravel cuando el usuario visita una URL.
        Estas rutas pueden responder a distintos métodos HTTP, como GET, POST, PUT y DELETE.
    </p>

    <h3>Ejemplos de rutas en Laravel</h3>

<pre><code>Route::get('/productos', [ProductoController::class, 'index']);
Route::post('/productos', [ProductoController::class, 'store']);
Route::put('/productos/{id}', [ProductoController::class, 'update']);
Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);</code></pre>

    <h3>Tabla de métodos HTTP</h3>

    <table>
        <tr>
            <th>Método</th>
            <th>Uso</th>
            <th>Ejemplo</th>
        </tr>
        <tr>
            <td>GET</td>
            <td>Mostrar información</td>
            <td>/apuntes</td>
        </tr>
        <tr>
            <td>POST</td>
            <td>Guardar información</td>
            <td>/apuntes</td>
        </tr>
        <tr>
            <td>PUT</td>
            <td>Actualizar información</td>
            <td>/apuntes/1</td>
        </tr>
        <tr>
            <td>DELETE</td>
            <td>Eliminar información</td>
            <td>/apuntes/1</td>
        </tr>
    </table>

    <h3>Rutas con parámetros</h3>

<pre><code>Route::get('/usuario/{id}', function ($id) {
    return 'Usuario número ' . $id;
});</code></pre>

    <h3>Parámetros opcionales</h3>

<pre><code>Route::get('/saludo/{nombre?}', function ($nombre = 'Invitado') {
    return 'Hola ' . $nombre;
});</code></pre>

    <h3>Middleware</h3>
    <p>
        El middleware permite filtrar solicitudes antes de que lleguen al controlador.
        Se puede usar, por ejemplo, para proteger rutas o verificar condiciones.
    </p>

<pre><code>Route::get('/panel', [PanelController::class, 'index'])
    ->middleware('auth');</code></pre>
</div>
@endsection