<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guía Laravel NT1 - NT5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
:root {
    --bg: #EEEDEB;
    --accent: #E0CCBE;
    --muted: #747264;
    --dark: #3C3633;

    --white: #ffffff;
    --text: #2f2b29;
    --text-soft: #5f5b56;
    --border: #d8d3cf;
    --light: #f8f7f6;

    --danger: #9b3d3d;
    --danger-bg: #fdeaea;
}

/* ================= BASE ================= */

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: var(--bg);
    color: var(--text);
}

/* ================= HEADER ================= */

header {
    background: var(--dark);
    color: var(--white);
    padding: 26px 40px;
    border-bottom: 5px solid var(--accent);
}

header h1 {
    margin: 0;
    font-size: 27px;
    font-weight: 700;
}

header p {
    margin: 6px 0 0;
    font-size: 15px;
    color: #e9e6e2;
}

/* ================= NAVBAR ================= */

nav {
    background: var(--white);
    padding: 14px 40px;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    border-bottom: 1px solid var(--border);
    box-shadow: 0 2px 8px rgba(60, 54, 51, 0.08);
}

nav a {
    color: var(--dark);
    text-decoration: none;
    font-size: 14px;
    padding: 9px 13px;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.2s ease;
}

nav a:hover {
    background: var(--accent);
    color: var(--dark);
}

/* ================= LAYOUT ================= */

main {
    max-width: 1100px;
    margin: 32px auto;
    padding: 0 20px;
}

.card {
    background: var(--white);
    padding: 28px;
    border-radius: 14px;
    margin-bottom: 22px;
    border: 1px solid var(--border);
    box-shadow: 0 4px 14px rgba(60, 54, 51, 0.08);
}

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 18px;
}

/* ================= TEXTOS ================= */

h2 {
    color: var(--dark);
    margin-top: 0;
    margin-bottom: 12px;
    font-size: 25px;
    border-left: 6px solid var(--accent);
    padding-left: 12px;
}

h3 {
    color: var(--dark);
    margin-top: 26px;
    margin-bottom: 10px;
    border-bottom: 2px solid var(--accent);
    padding-bottom: 5px;
}

p {
    line-height: 1.6;
    color: var(--text);
}

strong {
    color: var(--dark);
}

/* ================= BLOQUES DE CÓDIGO ================= */

pre {
    background: var(--dark);
    color: #f8f7f6;
    padding: 16px;
    border-radius: 10px;
    overflow-x: auto;
    font-size: 14px;
    line-height: 1.5;
    border-left: 5px solid var(--accent);
}

code {
    font-family: Consolas, Monaco, monospace;
}

/* ================= TABLAS ================= */

table {
    width: 100%;
    border-collapse: collapse;
    background: var(--white);
    margin-top: 15px;
    border-radius: 10px;
    overflow: hidden;
}

th,
td {
    border: 1px solid var(--border);
    padding: 12px;
    text-align: left;
    vertical-align: top;
}

th {
    background: var(--dark);
    color: var(--white);
}

tr:nth-child(even) {
    background: var(--light);
}

/* ================= FORMULARIOS ================= */

form {
    margin-top: 20px;
}

.form-group {
    margin-bottom: 18px;
}

label {
    display: block;
    font-weight: 700;
    margin-bottom: 6px;
    color: var(--dark);
}

input,
textarea,
select {
    width: 100%;
    box-sizing: border-box;
    padding: 12px 14px;
    border: 1px solid var(--border);
    border-radius: 9px;
    font-size: 15px;
    font-family: Arial, Helvetica, sans-serif;
    background: var(--white);
    color: var(--text);
    transition: border-color 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
}

input::placeholder,
textarea::placeholder {
    color: #9c9792;
}

input:focus,
textarea:focus,
select:focus {
    outline: none;
    border-color: var(--muted);
    background: #fffdfc;
    box-shadow: 0 0 0 3px rgba(224, 204, 190, 0.55);
}

textarea {
    resize: vertical;
    min-height: 120px;
}

select {
    cursor: pointer;
}

select:invalid {
    color: #9c9792;
}

option {
    color: var(--text);
}

/* ================= MENSAJES ================= */

.error {
    color: var(--danger);
    background: var(--danger-bg);
    border: 1px solid #f3b7b7;
    padding: 8px 10px;
    border-radius: 7px;
    font-size: 14px;
    margin-top: 6px;
}

.success {
    background: #f3eee9;
    border: 1px solid var(--accent);
    color: var(--dark);
    padding: 12px 14px;
    border-radius: 9px;
    margin-bottom: 20px;
}

/* ================= BOTONES ================= */

.btn {
    display: inline-block;
    background: var(--dark);
    color: var(--white);
    padding: 10px 15px;
    border-radius: 8px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 700;
    transition: all 0.2s ease;
}

.btn:hover {
    background: var(--muted);
    color: var(--white);
}

.btn:active {
    transform: scale(0.98);
}

.btn-danger {
    background: #8f3f3f;
}

.btn-danger:hover {
    background: #733030;
}

.btn-secondary {
    background: var(--muted);
}

.btn-secondary:hover {
    background: var(--accent);
    color: var(--dark);
}

.form-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-top: 20px;
}

/* ================= FLUJO MVC ================= */

.flow {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
    margin-top: 20px;
}

.flow div {
    background: var(--dark);
    color: var(--white);
    padding: 14px 18px;
    border-radius: 9px;
    font-weight: bold;
    box-shadow: 0 3px 9px rgba(60, 54, 51, 0.18);
}

.flow div:nth-child(even) {
    background: var(--muted);
}

/* ================= FOOTER ================= */

footer {
    text-align: center;
    padding: 25px;
    color: var(--text-soft);
    font-size: 13px;
}

/* ================= RESPONSIVE ================= */

@media (max-width: 768px) {
    header {
        padding: 18px 20px;
    }

    header h1 {
        font-size: 22px;
    }

    nav {
        padding: 12px 20px;
        gap: 8px;
    }

    nav a {
        font-size: 13px;
        padding: 8px 10px;
    }

    main {
        margin: 20px auto;
        padding: 0 14px;
    }

    .card {
        padding: 20px;
    }

    table {
        font-size: 14px;
    }

    th,
    td {
        padding: 9px;
    }

    .btn {
        width: 100%;
        text-align: center;
        box-sizing: border-box;
    }

    .form-actions {
        flex-direction: column;
    }
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