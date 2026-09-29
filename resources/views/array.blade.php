<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Массивы - Товары</title>
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
        <h1>Каталог товаров</h1>
        <div class="products-grid">
            @foreach($array as $item)
                <div class="product-card">
                    <img src="{{ Vite::asset('resources/images/'.$item['path']) }}" alt="{{ $item['title'] }}">
                    <h3>{{ $item['title'] }}</h3>
                    <p>{{ $item['price'] }} &#8381;</p>
                </div>
            @endforeach
        </div>
    </main>
    <hr>

    <footer>
        <p>Абижанов Дмитрий Андреевич, 2026 год</p>
    </footer>

</body>
</html>
