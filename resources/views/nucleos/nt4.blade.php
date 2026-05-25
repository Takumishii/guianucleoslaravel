@extends('layouts.app')

@section('content')
<div class="card">
    <h2>NT4 - Modelos y Bases de Datos: Eloquent ORM</h2>

    <p>
        Eloquent ORM permite trabajar con tablas de la base de datos usando modelos de Laravel.
        Cada modelo representa una tabla y permite realizar consultas, inserciones, ediciones y eliminaciones.
    </p>

    <h3>Configuración de base de datos en .env</h3>

<pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=guia_laravel
DB_USERNAME=root
DB_PASSWORD=</code></pre>

    <h3>Migración</h3>

<pre><code>Schema::create('apuntes', function (Blueprint $table) {
    $table->id();
    $table->foreignId('nucleo_id')->constrained('nucleos');
    $table->string('titulo');
    $table->text('contenido');
    $table->text('codigo_ejemplo')->nullable();
    $table->timestamps();
});</code></pre>

    <h3>Modelo Eloquent</h3>

<pre><code>class Apunte extends Model
{
    protected $fillable = [
        'nucleo_id',
        'titulo',
        'contenido',
        'codigo_ejemplo',
    ];

    public function nucleo()
    {
        return $this->belongsTo(Nucleo::class);
    }
}</code></pre>

    <h3>Relaciones</h3>

<pre><code>public function apuntes()
{
    return $this->hasMany(Apunte::class);
}

public function nucleo()
{
    return $this->belongsTo(Nucleo::class);
}</code></pre>

    <h3>Consultas Eloquent</h3>

<pre><code>Apunte::all();

Apunte::with('nucleo')->get();

Apunte::where('nucleo_id', 4)->get();

Apunte::create([
    'nucleo_id' => 4,
    'titulo' => 'Ejemplo Eloquent',
    'contenido' => 'Contenido del apunte',
]);</code></pre>

    <p>
        El ejemplo práctico de este núcleo está implementado en la sección Apuntes,
        donde se pueden crear, listar, editar y eliminar registros reales desde la base de datos.
    </p>

    <a href="{{ route('apuntes.index') }}" class="btn">Ver CRUD de apuntes</a>
</div>
@endsection