<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>

<body>
    <main>
        <header class="header">
            <div class="header__inner">
                <a class="header__logo" href="/">
                Todo
                </a>
            </div>
            @yield('error')
        </header>

           @yield('content')
    </main>
</body>
</html>