<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenzia Viaggi</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="/"></a>
        </div>
        <ul>
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('viaggi')}}">Viaggi</a>
            </li>
        </ul>
    </header>

    <main>
        @yield('main-content')
    </main>

    <footer>
        <h3>footer</h3>
    </footer>
</body>
</html>