<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <h1>Lista de Produtos</h1>   
    </header>
    
    <aside>
        <span></span>
        <nav>
            <ul>
                <li><a href="{{route('produtos-index')}}">inicio</a></li>
                <li><a href="">sobre</a></li>
                <li><a href="">contato</a></li>
            </ul>
        </nav>
    </aside>
    
    <main>
        @yield('content')
    </main>

    <footer>Criado e desenvolvido por Nicolas Rodrigues</footer>
</body>
</html>