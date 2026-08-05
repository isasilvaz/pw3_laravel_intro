<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Projeto PW3')</title>
    <link rel="styleheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <header>
        <div>
            <h1>PW3 - Projeto Laravel</h1>

        <nav>
                <a href="/">Início</a>
                <a href="/landing">Landing</a>
                <a href="/admin">Admin</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>© {{ date('Y') }} - Projeto acadêmico PW3</p>
        </div>
    </footer>

    <script src="{{ asset('assets/js/app.js') }}"></script>

    </header>
    
</body>
</html>