
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href=""{{ url('./css/app.css') }}"">
</head>
    <header>
    <ul>
    <li>
        <a href="{{ url('/') }}">Home</a>
    </li>
        <li>Filmes</li>
            <li>Series</li>
                <li>Personagens</li>
                    <li>Pokemon</li>
    </ul>
    </header>
    <body>
        @yield('content')
    </body>
</html>
