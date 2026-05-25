@extends('layouts.app')

@section('content')

<div class="card">

    <h2>NT2 - Rutas y Controladores</h2>

    <p>
        Las rutas permiten definir qué debe hacer Laravel cuando el usuario visita una URL.
        Laravel asocia cada ruta a una función o controlador encargado de procesar la solicitud.
    </p>

    <h3>Ejemplos de rutas en Laravel</h3>

<pre><code>@verbatim
Route::get('/productos', [ProductoController::class, 'index']);

Route::post('/productos', [ProductoController::class, 'store']);

Route::put('/productos/{id}', [ProductoController::class, 'update']);

Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);
@endverbatim</code></pre>

    <h3>Tabla interactiva de métodos HTTP</h3>

    <p>
        Presione un botón para visualizar la función de cada método HTTP.
    </p>

    <table>
        <tr>
            <th>Método</th>
            <th>Uso</th>
            <th>Ejemplo</th>
            <th>Acción</th>
        </tr>

        <tr>
            <td>GET</td>
            <td>Obtener información</td>
            <td>/apuntes</td>
            <td>
                <button class="btn" onclick="mostrarInfo('GET recupera información desde el servidor.')">
                    Ver explicación
                </button>
            </td>
        </tr>

        <tr>
            <td>POST</td>
            <td>Guardar información</td>
            <td>/apuntes</td>
            <td>
                <button class="btn" onclick="mostrarInfo('POST envía datos para crear registros.')">
                    Ver explicación
                </button>
            </td>
        </tr>

        <tr>
            <td>PUT</td>
            <td>Actualizar información</td>
            <td>/apuntes/1</td>
            <td>
                <button class="btn" onclick="mostrarInfo('PUT modifica datos existentes.')">
                    Ver explicación
                </button>
            </td>
        </tr>

        <tr>
            <td>DELETE</td>
            <td>Eliminar información</td>
            <td>/apuntes/1</td>
            <td>
                <button class="btn btn-danger" onclick="mostrarInfo('DELETE elimina registros del sistema.')">
                    Ver explicación
                </button>
            </td>
        </tr>
    </table>

    <div id="info-http"
         style="margin-top:20px; padding:15px; background:#eef4ff; border-radius:8px;">
        Seleccione un método HTTP para visualizar su explicación.
    </div>

    <h3>Rutas con parámetros</h3>

<pre><code>@verbatim
Route::get('/usuario/{id}', function ($id) {
    return 'Usuario número ' . $id;
});
@endverbatim</code></pre>

    <p>
        Las rutas con parámetros permiten recibir valores dinámicos desde la URL.
    </p>

    <h3>Parámetros opcionales</h3>

<pre><code>@verbatim
Route::get('/saludo/{nombre?}', function ($nombre = 'Invitado') {
    return 'Hola ' . $nombre;
});
@endverbatim</code></pre>

    <p>
        Los parámetros opcionales permiten que la ruta funcione incluso si el valor no es enviado.
    </p>

    <h3>Middleware</h3>

    <p>
        El middleware permite filtrar solicitudes antes de llegar al controlador.
        Se utiliza comúnmente para proteger rutas privadas o verificar autenticación.
    </p>

<pre><code>@verbatim
Route::get('/panel', [PanelController::class, 'index'])
    ->middleware('auth');
@endverbatim</code></pre>

    <h3>Demo visual de middleware</h3>

    <p>
        El siguiente ejemplo simula el comportamiento de una ruta protegida por middleware.
    </p>

    <button class="btn" onclick="accesoPermitido()">
        Simular usuario autenticado
    </button>

    <button class="btn btn-danger" onclick="accesoDenegado()">
        Simular usuario no autenticado
    </button>

    <div id="middleware-demo"
         style="margin-top:20px; padding:15px; border-radius:8px; background:#f4f4f4;">
        Esperando simulación de acceso...
    </div>

</div>

<script>

function mostrarInfo(texto)
{
    document.getElementById('info-http').innerText = texto;
}

function accesoPermitido()
{
    const demo = document.getElementById('middleware-demo');

    demo.innerHTML =
        'Acceso permitido mediante middleware auth';

    demo.style.background = '#d8f3dc';
}

function accesoDenegado()
{
    const demo = document.getElementById('middleware-demo');

    demo.innerHTML =
        'Acceso denegado por middleware auth';

    demo.style.background = '#ffd6d6';
}

</script>

@endsection