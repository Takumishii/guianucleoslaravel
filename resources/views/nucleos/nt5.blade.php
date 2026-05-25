@extends('layouts.app')

@section('content')
<div class="card">
    <h2>NT5 - Formularios y Validaciones</h2>

    <p>
        Laravel permite crear formularios seguros mediante Blade y proteger las solicitudes
        usando el token CSRF. Además, permite validar datos antes de guardarlos en la base de datos.
    </p>

    <h3>Formulario con CSRF</h3>

<pre><code>&lt;form method="POST" action="{{ route('apuntes.store') }}"&gt;
    @csrf

    &lt;input type="text" name="titulo"&gt;

    &lt;button type="submit"&gt;Guardar&lt;/button&gt;
&lt;/form&gt;</code></pre>

    <h3>Validación con validate()</h3>

<pre><code>$request->validate([
    'titulo' => ['required', 'min:5', 'max:100'],
    'contenido' => ['required', 'min:10'],
]);</code></pre>

    <h3>Form Request</h3>

<pre><code>class StoreApunteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'titulo' => ['required', 'min:5', 'max:100'],
            'contenido' => ['required', 'min:10'],
        ];
    }
}</code></pre>

    <h3>Mensajes de error</h3>

<pre><code>@error('titulo')
    &lt;div&gt;{{ $message }}&lt;/div&gt;
@enderror</code></pre>

    <h3>Reglas comunes</h3>

    <table>
        <tr>
            <th>Regla</th>
            <th>Función</th>
        </tr>
        <tr>
            <td>required</td>
            <td>El campo es obligatorio.</td>
        </tr>
        <tr>
            <td>email</td>
            <td>El campo debe tener formato de correo.</td>
        </tr>
        <tr>
            <td>min</td>
            <td>Define un mínimo de caracteres.</td>
        </tr>
        <tr>
            <td>max</td>
            <td>Define un máximo de caracteres.</td>
        </tr>
        <tr>
            <td>unique</td>
            <td>Evita datos repetidos en la base de datos.</td>
        </tr>
        <tr>
            <td>confirmed</td>
            <td>Confirma que dos campos coincidan.</td>
        </tr>
    </table>

    <p>
        El ejemplo práctico de este núcleo está en el formulario de creación de apuntes.
        Si se envían datos incompletos, Laravel muestra los errores de validación.
    </p>

    <a href="{{ route('apuntes.create') }}" class="btn">Probar formulario validado</a>
</div>
@endsection