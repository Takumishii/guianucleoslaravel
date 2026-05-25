@extends('layouts.app')

@section('content')
<div class="card">

    <h2>NT1 - Introducción a Laravel y fundamentos del framework</h2>

    <p>
        Laravel es un framework de PHP orientado al desarrollo de aplicaciones web modernas.
        Su objetivo es facilitar el desarrollo mediante una estructura organizada,
        herramientas automatizadas y componentes reutilizables.
    </p>

    <h3>Características principales de Laravel</h3>

    <ul>
        <li>Arquitectura MVC.</li>
        <li>Sistema de rutas.</li>
        <li>Motor de plantillas Blade.</li>
        <li>Migraciones y Eloquent ORM.</li>
        <li>Validaciones integradas.</li>
        <li>Comandos Artisan.</li>
        <li>Seguridad integrada contra CSRF y SQL Injection.</li>
    </ul>

    <h3>Arquitectura MVC</h3>

    <p>
        Laravel utiliza el patrón MVC (Modelo Vista Controlador).
        Este patrón separa la lógica del sistema en distintas responsabilidades.
    </p>

    <table>
        <tr>
            <th>Componente</th>
            <th>Función</th>
        </tr>

        <tr>
            <td>Model</td>
            <td>Representa y manipula los datos de la base de datos.</td>
        </tr>

        <tr>
            <td>View</td>
            <td>Muestra la interfaz visual al usuario.</td>
        </tr>

        <tr>
            <td>Controller</td>
            <td>Procesa solicitudes y conecta modelos con vistas.</td>
        </tr>
    </table>

    <h3>Flujo MVC en Laravel</h3>

    <p>
        Cuando un usuario visita una página en Laravel, ocurre el siguiente proceso:
    </p>

    <div class="flow">
        <div>Request</div>
        <div>Route</div>
        <div>Controller</div>
        <div>View</div>
        <div>Response</div>
    </div>

    <table>
        <tr>
            <th>Etapa</th>
            <th>Descripción</th>
        </tr>

        <tr>
            <td>Request</td>
            <td>El navegador realiza una solicitud al servidor.</td>
        </tr>

        <tr>
            <td>Route</td>
            <td>Laravel identifica qué ruta debe ejecutarse.</td>
        </tr>

        <tr>
            <td>Controller</td>
            <td>El controlador procesa la lógica del sistema.</td>
        </tr>

        <tr>
            <td>View</td>
            <td>Se genera una vista Blade con información dinámica.</td>
        </tr>

        <tr>
            <td>Response</td>
            <td>Laravel devuelve el resultado al navegador.</td>
        </tr>
    </table>

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
            <td>Define las rutas del sistema.</td>
        </tr>

        <tr>
            <td>resources/views</td>
            <td>Contiene las vistas Blade.</td>
        </tr>

        <tr>
            <td>database</td>
            <td>Contiene migraciones, factories y seeders.</td>
        </tr>

        <tr>
            <td>public</td>
            <td>Contiene archivos públicos como imágenes y CSS.</td>
        </tr>
    </table>

    <h3>Composer</h3>

    <p>
        Composer es el administrador de dependencias de PHP.
        Laravel lo utiliza para instalar librerías y administrar paquetes externos.
    </p>

<pre><code>composer install</code></pre>

    <p>
        Este comando instala todas las dependencias definidas en el archivo composer.json.
    </p>

    <h3>Comandos Artisan esenciales</h3>

    <p>
        Artisan es la consola oficial de Laravel. Permite automatizar tareas comunes
        mediante comandos.
    </p>

    <table>
        <tr>
            <th>Comando</th>
            <th>Descripción</th>
        </tr>

        <tr>
            <td>php artisan serve</td>
            <td>Inicia un servidor local para ejecutar el proyecto.</td>
        </tr>

        <tr>
            <td>php artisan make:controller NombreController</td>
            <td>Crea un nuevo controlador automáticamente.</td>
        </tr>

        <tr>
            <td>php artisan make:model Producto -m</td>
            <td>
                Crea un modelo y además genera una migración automáticamente.
            </td>
        </tr>

        <tr>
            <td>php artisan migrate</td>
            <td>Ejecuta las migraciones y crea las tablas en la base de datos.</td>
        </tr>

        <tr>
            <td>php artisan migrate:fresh --seed</td>
            <td>
                Elimina todas las tablas, vuelve a ejecutar las migraciones
                y carga datos de prueba mediante seeders.
            </td>
        </tr>
    </table>

    <h3>Ejemplo práctico</h3>

<pre><code>Route::get('/', [HomeController::class, 'index']);</code></pre>

    <p>
        Esta ruta indica que cuando el usuario visite la URL principal,
        Laravel ejecutará el método index del controlador HomeController.
    </p>

</div>
@endsection