@extends('layouts.app')

@section('content')
<div class="card">
    <h2>NT1 - Introducción a Laravel y fundamentos del framework</h2>

    <p>
        Laravel es un framework de PHP orientado al desarrollo de aplicaciones web modernas.
        Se caracteriza por entregar una estructura ordenada, herramientas de automatización,
        seguridad integrada y una forma clara de trabajar con el patrón MVC.
    </p>

    <h3>Arquitectura MVC</h3>
    <p>
        MVC significa Modelo, Vista y Controlador. El modelo representa los datos, la vista
        muestra la información al usuario y el controlador recibe las solicitudes, procesa la
        lógica y decide qué respuesta entregar.
    </p>

    <div class="flow">
        <div>Request</div>
        <div>Route</div>
        <div>Controller</div>
        <div>View</div>
        <div>Response</div>
    </div>

    <h3>Estructura de carpetas</h3>
    <table>
        <tr>
            <th>Carpeta</th>
            <th>Función</th>
        </tr>
        <tr>
            <td>app</td>
            <td>Contiene modelos, controladores y lógica principal.</td>
        </tr>
        <tr>
            <td>routes</td>
            <td>Define las rutas de la aplicación.</td>
        </tr>
        <tr>
            <td>resources/views</td>
            <td>Contiene las vistas Blade.</td>
        </tr>
        <tr>
            <td>database</td>
            <td>Contiene migraciones, seeders y factories.</td>
        </tr>
        <tr>
            <td>public</td>
            <td>Contiene archivos accesibles públicamente.</td>
        </tr>
    </table>

    <h3>Composer</h3>
    <p>
        Composer es el gestor de dependencias de PHP. Laravel lo utiliza para instalar paquetes,
        actualizar librerías y administrar el proyecto.
    </p>

    <h3>Comandos Artisan esenciales</h3>

<pre><code>php artisan serve
php artisan make:controller NombreController
php artisan make:model Producto -m
php artisan migrate
php artisan migrate:fresh --seed</code></pre>
</div>
@endsection