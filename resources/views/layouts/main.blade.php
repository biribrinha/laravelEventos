<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!--Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!--CSS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">

    <script src="/js/scripts.js"></script>
</head>

<body>
    <header>
        <div class="containers">
            <nav class="fixed-top">
                <div class="container1">
                    <a href="/" class="logo">
                        <img src="/img/hdcevents_logo.svg" alt="HDC Events">
                    </a>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="/">Eventos</a>
                        </li>
                        <li>
                            <a href="/events/create">Criar Eventos</a>
                        </li>
                        <li>
                            <a href="/">Entrar</a>
                        </li>
                        <li>
                            <a href="/">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer>
        <p>HDC Events &copy; 2023</p>
    </footer>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>
</html>
