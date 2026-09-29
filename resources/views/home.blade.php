<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header>
        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Логотип" width="100">
        <nav>
            <a href="{{ route('home') }}">Главная</a> | 
            <a href="{{ route('array') }}">Массивы</a>
        </nav>
    </header>
    <hr>

    <main>
        <h1>Главная страница</h1>
        <img src="{{ Vite::asset('resources/images/main.jpg') }}" alt="Картинка" width="400">
        <p>Привет! бла бла бла бла, бла бла бла бла бла бла бла бла</p>
    </main>
    <hr>

    <footer>
        <p>Абижанов Дмитрий Андреевич, 2026 год</p>
    </footer>

</body>
</html>
