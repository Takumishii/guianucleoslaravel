<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guía Laravel NT1 - NT5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
            color: #222;
        }

        header {
            background: #143b63;
            color: white;
            padding: 20px 40px;
        }

        header h1 {
            margin: 0;
            font-size: 26px;
        }

        header p {
            margin: 6px 0 0;
            font-size: 15px;
        }

        nav {
            background: #0f2d4a;
            padding: 12px 40px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            padding: 8px 12px;
            border-radius: 6px;
        }

        nav a:hover {
            background: #1f5f93;
        }

        main {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 24px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        h2 {
            color: #143b63;
            margin-top: 0;
        }

        h3 {
            color: #1f5f93;
        }

        pre {
            background: #1e1e1e;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
            font-size: 14px;
        }

        code {
            font-family: Consolas, monospace;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #143b63;
            color: white;
        }

        .btn {
            display: inline-block;
            background: #143b63;
            color: white;
            padding: 10px 14px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn:hover {
            background: #1f5f93;
        }

        .btn-danger {
            background: #a83232;
        }

        .btn-danger:hover {
            background: #7d2222;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 14px;
            border: 1px solid #bbb;
            border-radius: 6px;
            font-size: 15px;
        }

        label {
            font-weight: bold;
        }

        .error {
            color: #a83232;
            font-size: 14px;
            margin-top: -8px;
            margin-bottom: 10px;
        }

        .success {
            background: #d8f3dc;
            border: 1px solid #95d5b2;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 18px;
        }

        .flow {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
            margin-top: 20px;
        }

        .flow div {
            background: #143b63;
            color: white;
            padding: 14px 18px;
            border-radius: 8px;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #555;
            font-size: 13px;
        }
    </style>
</head>
<body>

<header>
    <h1>Guía Didáctica Laravel NT1 - NT5</h1>
    <p>Electivo Profesional I - Desarrollo Web con Laravel</p>
</header>

<nav>
    <a href="{{ route('home') }}">Inicio</a>
    <a href="{{ route('nt1') }}">NT1</a>
    <a href="{{ route('nt2') }}">NT2</a>
    <a href="{{ route('nt3') }}">NT3</a>
    <a href="{{ route('nt4') }}">NT4</a>
    <a href="{{ route('nt5') }}">NT5</a>
    <a href="{{ route('apuntes.index') }}">Apuntes</a>
    <a href="{{ route('apuntes.create') }}">Crear apunte</a>
</nav>

<main>
    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</main>

<footer>
    Por Patricio Cárdenas y Geraldine Martínez
</footer>

</body>
</html>